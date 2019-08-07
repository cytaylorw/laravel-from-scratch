@extends('layouts.app');

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
    <div>
        {!!$post->body!!}

    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest() && Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    {{ Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'DELETE', 'class' => 'float-right']) }}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {{ Form::close() }}
    @endif
@endsection