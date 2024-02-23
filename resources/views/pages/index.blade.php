@extends('layouts.main-layout')

@section('head')
<title>Home</title>
@endsection

@section('content')
<h1>Project list</h1>
<ul>
    @foreach ($projects as $project)
    <li>
        <h3>Project name: </h3>
        <span>{{ $project -> name }}: </span>
        <span>{{ $project -> type -> name}}</span>
    </li>
    @endforeach
</ul>
@endsection