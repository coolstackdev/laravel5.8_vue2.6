<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    // save feedback to database
    public function leave_feedback(Request $request) 
    {
        $feedback_text = $request->input('feedback_text');
        $current_user_id = auth()->user()->id;

        $review = new Review;

        $review->user_id_from = $current_user_id;
        $review->user_id_to = 2; // temp value for test
        $review->review_text = $feedback_text;
        $review->review_rate = 5; // temp value for test
        $review->rental_id = 3; // temp value for test

        $review->save();

        return view('home');
    }
}
