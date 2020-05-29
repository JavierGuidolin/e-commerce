<?php

namespace App\Http\Controllers;

use App\Book;

class IndexController extends Controller
{
    public function index()
    {
        $bestsellers = Book::orderBy('title', 'desc')->limit(10)->get();
        $news = Book::orderBy('created_at', 'desc')->limit(10)->get();

        foreach ($bestsellers as $best) {
            if (strlen($best) > 22) {
                $best->title = substr($best->title, 0, 22) . '...';
            }
        }

        foreach ($news as $new) {
            if (strlen($new) > 22) {
                $new->title = substr($new->title, 0, 22) . '...';
            }
        }

        return view('index', compact('bestsellers', 'news'));
    }
}
