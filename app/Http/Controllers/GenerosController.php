<?php

namespace App\Http\Controllers;

use App\Category;

class GenerosController extends Controller
{
    public function verGeneros()
    {
        $categories = Category::paginate(2);

        $vac = compact('categories');
        return view('listadoGeneros', $vac); //variable a compartir en la vista

    }

    public function all()
    {

        $categories = Category::all()->toJSON();
        return $categories;

    }
}
