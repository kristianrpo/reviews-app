<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $reviews = Review::all();
        $viewData['reviews'] = $reviews;

        return view('review.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];
        $review = Review::findOrFail($id);
        $viewData['review'] = $review;

        return view('review.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        return view('review.create');
    }

    public function store(Request $request): View
    {
        $request->validate([
            'rating' => 'required|integer',
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:500',
        ]);

        Review::create($request->only(['rating', 'title', 'description']));

        return view('review.store');
    }

    public function destroy(int $id): RedirectResponse
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('review.index');
    }
}
