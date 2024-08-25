@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center align-items-center full-height">
    <div>
        <h1 class="text-center"> Reviews APP </h1>
        <div class="d-grid gap-2 d-md-block text-center">
            <a class="btn bg-button text-white" href="{{ route('review.create') }}"> Create Review </a>
            <a class="btn bg-button text-white" href="{{ route('review.index') }}"> View reviews </a>
        </div>
    </div>
</div>
@endsection