@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p class="lead">This is the laravel application index page.</p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
      </div>
        
@endsection
