@extends('layouts.app')

@section('content')
    <h1 style="padding:20px 0px 0px 0px; font-weight:bolder;"><kbd>To Do List</kbd></h1>
      @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="container p-3 my-3 border">
                <h5><a style="font-weight:bolder;" href="/Todo/{{$post->id}}">{{$post->name}}</a></h5>
                <small>Publish on {{$post->created_at}}</small>
            </div>   
        @endforeach
      @else
        <p>NO TASK FOUND</p>
      @endif
@endsection