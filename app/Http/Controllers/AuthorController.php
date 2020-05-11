<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Http\Requests\AuthorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{

    public function all($busqueda)
    {

        $busqueda = '%' . $busqueda . '%';
        $authors = Autor::where('name', 'like', $busqueda)->orWhere('surname', 'like', $busqueda)->get();
        $json = json_encode($authors);

        return $json;

    }

    public function add(AuthorRequest $req)
    {

        $cover = $req->file('file')->store('public/authors');

        $author = Autor::create([
            "name" => $req->name,
            "surname" => $req->surname,
            "cover" => basename($cover),
        ]);

        return response()->json(['success' => 'success'], 200);

    }

    public function getAuthorById($id)
    {

        $author = Autor::where('id', $id)->get()->first();
        return $author->toJSON();

    }

    public function alls()
    {

        $authors = Autor::all();
        return $authors->toJSON();

    }

    public function delete(Request $req)
    {

        $author = Autor::findOrFail($req->id);

        $author->delete();

        if ($author->trashed()) {
            return response()->json(['success' => 'success'], 200);
        }

    }

    public function update(AuthorRequest $req)
    {

        $author = Autor::find($req->id);
        $file = $author->cover;

        if ((gettype($req->file)) != 'string') {
            Storage::delete('public/authors/' . $author->cover);
            $file = $req->file('file')->store('public/authors');
            $file = basename($file);
        }

        $authorUpdated = $author->update([
            "name" => $req->name,
            "surname" => $req->surname,
            "cover" => $file,
        ]);

        return response()->json(['success' => 'success'], 200);

    }

}
