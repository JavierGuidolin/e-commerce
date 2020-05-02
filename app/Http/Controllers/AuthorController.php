<?php

namespace App\Http\Controllers;

use App\Autor;

class AuthorController extends Controller
{

    public function all($busqueda)
    {

        $busqueda = '%' . $busqueda . '%';
        $authors = Autor::where('name', 'like', $busqueda)->orWhere('surname', 'like', $busqueda)->get();
        $json = json_encode($authors);

        return $json;

    }

}
