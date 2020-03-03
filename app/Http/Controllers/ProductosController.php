<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Book;
Use App\Category;
class ProductosController extends Controller
{
    public function verProductos(){
      $books=Book::paginate(8);//trae todos los libros y los pagina por 8
      $categories=Category::all();
      $vac= compact('books','categories');//variable a compartir en la vista

      return view('listadoProductos',$vac);

    }
    public function detalleProducto($id){
      $books=Book::find($id);
      $vac= compact('books');
      return view('singleProduct',$vac);
    }
}
