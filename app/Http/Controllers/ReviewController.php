<?php

namespace App\Http\Controllers;

use App\Review;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{

    public function add(ReviewRequest $req)
    {
        $user = Auth::check() ? Auth::user()->id : null;

        if ($user) {
            $review = Review::create([
                "review" => $req->review,
                "stars" => $req->rating,
                "user_id" => $user,
                "book_id" => (int) $req->bookId,
            ]);
        }
        return response()->json(['success' => 'success'], 200);
        // return $req->review;
    }

    public function all($id)
    {

        $reviews = Review::where('book_id', $id)->with('user')->limit(3)->orderBy('created_at', 'desc')->get()->map(function ($review) {

            $review->edit = false;

            if (Auth::check()) {
                $review->edit = $review->user_id == Auth::user()->id;
            }

            return $review;
        });

        return $reviews->toJSON();

        // return json_encode($reviewable);
    }

    public function reviewable($id)
    {

        $userLogged = Auth::check() ? Auth::user()->id : null;
        $reviewable = false;

        if ($userLogged) {
            $reviewable = Review::where('user_id', $userLogged)->where('book_id', $id)->get();
            $reviewable = $reviewable->isEmpty() ? true : false;
        }

        return json_encode($reviewable);

    }

    public function delete(Request $req)
    {
        $review = Review::find($req->id);
        $review->delete();

        return response()->json(['success' => 'success'], 200);

    }
}
