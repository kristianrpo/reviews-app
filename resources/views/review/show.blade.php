@extends('layouts.app')
@section('title', 'Review details')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1> Review Details </h1>
        </div>
        <div class="card-body">
            <div class="container d-flex justify-content-around">
                <p class="card-text"> ID: {{ $viewData['review']->getId() }} </p>
                <p class="card-text"><strong> Created at: </strong> {{ $viewData['review']->getCreatedAt() }} </p>
                <p class="card-text"><strong> Updated at: </strong> {{ $viewData['review']->getUpdatedAt() }} </p>
            </div>
            <p class="card-text"><strong> Rating: </strong> {{ $viewData['review']->getRating() }} </p>
            <p class="card-text"><strong> Title: </strong> {{ $viewData['review']->getTitle() }} </p>
            <p class="card-text"><strong> Description: </strong> {{ $viewData['review']->getDescription() }} </p>
            <div class="d-flex align-items-center">
                <a href="{{ route('review.index') }}" class="btn bg-button text-white mx-2"> Go back </a>
                <form method="POST" action="{{ route('review.destroy', ['id' => $viewData['review']->getId()]) }}"
                    class="form-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-white"> Delete </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection