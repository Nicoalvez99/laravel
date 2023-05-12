@section('titulo', 'Portfolio')
@extends('navegacion')

@section('content')

<h1>Portfolio</h1>
@foreach($projects as $project)
    <p>{{ $project->title }}</p>
@endforeach

@endsection