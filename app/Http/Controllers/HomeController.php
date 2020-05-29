<?php

namespace App\Http\Controllers;

use App\Review;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $userId = Auth::user()->id;
        $reviews = Review::where('user_id', $userId)->with('book')->get();

        return view('home', compact('reviews'));

    }
}
