<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Book;
Use App\Category;
class ProductosController extends Controller
{
    public function verProductos(){

      $books=Book::paginate(8);//trae todos los libros y los pagina por 8
      $libros=Book::all();
      $categories=Category::all();
      $vac= compact('books','categories','libros');//variable a compartir en la vista
      return view('listadoProductos',$vac);

    }
    public function detalleProducto($id){
      $books=Book::find($id);
      $categories=Category::all();
      $vac= compact('books','categories');
      return view('singleProduct',$vac);
    }
}
