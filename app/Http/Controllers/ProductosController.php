<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Book;
use App\Category;
use App\Http\Requests\BookRequest;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    public function verProductos(Request $request)
    {

        $search = $request->get('search');
        $search = '%' . $search . '%';

        $books = Book::where('title', 'like', $search)->orWhere('resume', 'like', $search)->paginate(8);
        $libros = json_encode($books->items());
        $vac = compact('books', 'libros');

        return view('listadoProductos', $vac);

    }

    public function detalleProducto($id)
    {

        $book = Book::where('id', $id)->with('categoria')->with('authors')->first();
        $book->date = date('d/m/Y', strtotime($book->date));

        $qtyAuthors = $book->authors->count();
        $relatedBooks = $this->relatedBooks($qtyAuthors, $book);

        $rating = (int) Review::where('book_id', $id)->avg('stars');

        $vac = compact('book', 'relatedBooks', 'rating');
        return view('singleProduct', $vac);
    }

    private function relatedBooks($qtyAuthors, $book)
    {
       if ($qtyAuthors != 0) {
        $id = $book->authors->random(1)->first()->id;
        $author = Autor::where('id', $id)->with('books')->first();
        return $author->books->count() > 3 ? $author->books->random(3) : $author->books->all(); 
       }
       return [];
    }

    public function all()
    {

        $books = Book::with('authors')->with('categoria')->get();
        return $books;

    }

    public function getBookById($id)
    {

        $book = Book::select('cover', 'category_id as category', 'resume', 'date', 'id', 'isbn', 'pages', 'price', 'title', 'stock')->where('id', $id)->with('authors')->first();
        return $book->toJson();
    }

    public function add(BookRequest $req)
    {

        $authorsId = array_column(json_decode($req->authors, true), 'id');
        $authors = Autor::whereIn('id', $authorsId)->get();

        $cover = $req->file('cover')->store('public/covers');

        $book = Book::create([
            "title" => $req->title,
            "isbn" => $req->isbn,
            "pages" => $req->pages,
            "resume" => $req->resume,
            "date" => $req->date,
            "price" => $req->price,
            "stock" => $req->stock,
            "cover" => basename($cover),
            "category_id" => $req->category,
        ]);

        $resultado = $book->authors()->saveMany($authors);

        return response()->json(['success' => 'success'], 200);

    }

    public function edit(BookRequest $req)
    {

        $book = Book::find($req->id);
        $authorsId = array_column(json_decode($req->authors, true), 'id');
        $authors = Autor::whereIn('id', $authorsId)->get();

        if ((gettype($req->cover)) != 'string') {
            Storage::delete('public/covers/' . $book->cover);
            $cover = $req->file('cover')->store('public/covers');
            $cover = basename($cover);
        } else {
            $cover = $book->cover;
        }

        $bookUpdated = $book->update([
            "title" => $req->title,
            "isbn" => $req->isbn,
            "pages" => $req->pages,
            "resume" => $req->resume,
            "date" => $req->date,
            "price" => $req->price,
            "stock" => $req->stock,
            "cover" => $cover,
            "category_id" => $req->category,
        ]);

        $deletingAuthors = $book->authors()->detach();
        $resultado = $book->authors()->saveMany($authors);

        return response()->json(['success' => 'success'], 200);

    }

    public function delete(Request $req)
    {

        $book = Book::findOrFail($req->id);
        $book->delete();

        if ($book->trashed()) {
            return response()->json(['success' => 'success'], 200);
        }

    }
}
