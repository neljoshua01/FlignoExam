@extends('layouts.app')

@section('content')
    <h1 style="padding:20px 0px 0px 0px; font-weight:bolder;"><kbd>Edit Task </kbd></h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostController@update', $posts->id], 'store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name :')}}
            {{Form::text('name', $posts->name, ['class' => 'form-control', 'placeholder' => 'Enter name of task'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description :')}}
            {{Form::text('description', $posts->description, ['class' => 'form-control', 'placeholder' => 'Enter Description'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}   
@endsection