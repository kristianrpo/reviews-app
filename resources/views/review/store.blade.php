@extends('layouts.app')
@section('title', 'Review creation')
@section('content')
<div class="container d-flex justify-content-center align-items-center full-height">
    <div class="card align-items-center">
        <div class="card-body">
            <h1 class="card-title"> Review creation status </h1>
            <p class="card-text"> Your review was successfully created! </p>
            <a href="{{ route('home.index') }}" class="btn bg-button text-white"> Go to home page </a>
        </div>
    </div>
</div>
@endsection