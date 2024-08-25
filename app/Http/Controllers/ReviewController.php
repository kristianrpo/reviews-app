<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function create(): View
    {
        return view('review.create');
    }

    public function save(Request $request): View
    {
        $request->validate([
            'rating' => 'required|integer',
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:500',
        ]);

        Review::create($request->only(['rating', 'title', 'description']));

        return view('review.save');
    }
}
