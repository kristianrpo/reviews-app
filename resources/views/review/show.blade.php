@extends('layouts.app')
@section('title', 'Review details')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Review Details</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">ID: {{ $viewData['review']->getId() }}</h5>
            <p class="card-text"><strong>Rating:</strong> {{ $viewData['review']->getRating() }} </p>
            <p class="card-text"><strong>Title:</strong> {{ $viewData['review']->getTitle() }} </p>
            <p class="card-text"><strong>Description:</strong> {{ $viewData['review']->getDescription() }} </p>
            <div class="d-flex align-items-center">
                <a href="{{ route('review.index') }}" class="btn bg-button text-white mx-2">Go back</a>
                <form method="POST" action="{{ route('review.delete', ['id' => $viewData['review']->getId()]) }}"
                    class="form-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-white">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection