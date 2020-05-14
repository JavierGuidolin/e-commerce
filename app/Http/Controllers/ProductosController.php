<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Book;
use App\Category;
use App\Http\Requests\BookRequest;
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
        $books = Book::find($id);
        $categories = Category::all();
        $vac = compact('books', 'categories');
        return view('singleProduct', $vac);
    }

    public function all()
    {

        $books = Book::with('autor')->with('categoria')->get();
        return $books;

    }

    public function getBookById($id)
    {

        $book = Book::select('cover', 'category_id as category', 'resume', 'date', 'id', 'isbn', 'pages', 'price', 'title', 'stock')->where('id', $id)->with('autor')->first();
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

        $resultado = $book->autor()->saveMany($authors);

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

        $deletingAuthors = $book->autor()->detach();
        $resultado = $book->autor()->saveMany($authors);

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
