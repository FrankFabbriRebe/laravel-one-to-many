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
        {{ $project -> name }}
    </li>
    @endforeach
</ul>
@endsection