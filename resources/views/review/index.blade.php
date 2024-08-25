@extends('layouts.app')
@section('title', 'List reviews')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4"> Reviews </h1>
    <ul class="list-group">
        @foreach($viewData['reviews'] as $review)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <span> {{ $review->getId() }} </span>
                <span> - </span>
                <span class="ml-3"> {{ $review->getTitle() }} </span>
            </div>
            <a href="{{ route('review.show', ['id' => $review->getId()]) }}" class="btn bg-button btn-sm text-white">
                Show review
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endsection