@extends('layouts.app')
@section ('title', 'Create review')
@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center full-height">
    <div class="container-error-messages">
        @if($errors->any())
        <ul id="errors" class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="card">
        <div class="card-header text-center">
            <p> Write your review </p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('review.store') }}">
                @csrf
                <div class="mb-3">
                    <p class="form-label"> Rating </p>
                    <div class="btn-group bg-button" role="group" aria-label="rating">
                        <input type="radio" class="btn-check" name="rating" id="rating-0" autocomplete="off" value=0>
                        <label class="btn btn-outline-dark text-white" for="rating-0"> 0 </label>

                        <input type="radio" class="btn-check" name="rating" id="rating-1" autocomplete="off" value=1>
                        <label class="btn btn-outline-dark text-white" for="rating-1"> 1 </label>

                        <input type="radio" class="btn-check" name="rating" id="rating-2" autocomplete="off" value=2>
                        <label class="btn btn-outline-dark text-white" for="rating-2"> 2 </label>

                        <input type="radio" class="btn-check" name="rating" id="rating-3" autocomplete="off" value=3>
                        <label class="btn btn-outline-dark text-white" for="rating-3"> 3 </label>

                        <input type="radio" class="btn-check" name="rating" id="rating-4" autocomplete="off" value=4>
                        <label class="btn btn-outline-dark text-white" for="rating-4"> 4 </label>

                        <input type="radio" class="btn-check" name="rating" id="rating-5" autocomplete="off" value=5>
                        <label class="btn btn-outline-dark text-white" for="rating-5"> 5 </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label"> Title </label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"> Description </label>
                    <textarea type="text" class="form-control" id="description" name="description"
                        rows="3">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn bg-button text-white"> Submit </button>
            </form>
        </div>
    </div>
</div>
@endsection