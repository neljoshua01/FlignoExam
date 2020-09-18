@extends('layouts.app')

@section('content')
    <h1 style="padding:20px 0px 0px 0px; font-weight:bolder;">{{$posts->name}}</h1>
    <small>Publish on {{$posts->created_at}}</small>
    <hr>
    <h4>{{$posts->description}}</h4>
    <hr>
    <ul class="list-group list-group-horizontal">
        <a href="/Todo/{{$posts->id}}/edit" class="btn btn-primary">Edit Task</a>
        
        {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $posts->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </ul>
@endsection