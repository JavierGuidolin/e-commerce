<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Book;
use App\Category;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function verProductos()
    {

        $books = Book::paginate(8); //trae todos los libros y los pagina por 8
        $libros = Book::all();
        $categories = Category::all();
        $vac = compact('books', 'categories', 'libros'); //variable a compartir en la vista
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

    public function add(Request $req)
    {

        $authorsId = array_column(json_decode($req->authors, true), 'id');
        $authors = Autor::whereIn('id', $authorsId)->get();

        $req->validate([
            'title' => 'required|max:250',
            'isbn' => 'required|min:10|max:15',
            'pages' => 'required|numeric|min:10|max:9999',
            'resume' => 'required|min:30|max:1000',
            'date' => 'date',
            'price' => 'numeric|min:0.1|max:99999',
            'stock' => 'required|integer|min:0|max:999',
            'cover' => 'mimes:jpeg,png,jpg,gif,svg|max:5120',
            'category_id' => 'exists:categories,id',
        ], [
            'required' => "El campo :attribute debe estar completo.",
            'max' => "El campo :attribute debe tener un máximo de :max caracteres.",
            'min' => "El campo :attribute debe tener un mínimo de :min caracteres.",
            'numeric' => "El campo :attribute debe tener un valor numérico.",
            'pages.min' => "El campo :attribute debe ser un valor mayor a :min.",
            'pages.max' => "El campo :attribute debe ser un valor menor a :max.",
            'date' => "El campo :attribute debe ser una fecha válida.",
            'price.min' => "El campo :attribute debe ser un valor mayor a :min.",
            'price.max' => "El campo :attribute debe ser un valor menor a :max.",
            'integer' => "El campo :attribute deber tener un valor entero.",
            'stock.min' => "El campo :attribute debe ser un valor mayor a :min.",
            'stock.max' => "El campo :attribute debe ser un valor menor a :max.",
            'mimes' => "El campo :attribute debe ser del tipo jpeg, png, jpg, gif o svg",
            'cover.max' => "El campo :attribute debe ser un valor menor a 5MB.",
            'exists' => "El campo :attribute debe corresponder a un categoria ya existente",

        ]);

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

    public function delete(Request $req)
    {

        $book = Book::findOrFail($req->id);
        $book->delete();

        if ($book->trashed()) {
            return response()->json(['success' => 'success'], 200);
        }

    }
}
