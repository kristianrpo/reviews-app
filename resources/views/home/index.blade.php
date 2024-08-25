@extends('layouts.app')
@section ('css', asset('css/home/index.css'))
@section('content')
<div class="container d-flex justify-content-center align-items-center full-height">
    <div>
        <h1 class="text-center">Reviews APP</h1>
        <div class="d-grid gap-2 d-md-block text-center">
            <button class="btn bg-button text-white" type="button">Create Review</button>
            <button class="btn bg-button text-white" type="button">View reviews</button>
        </div>
    </div>
</div>
@endsection