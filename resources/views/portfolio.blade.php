@section('titulo', 'Portfolio')
@extends('navegacion')

@section('content')

<h1>Portfolio</h1>
@foreach($projects as $project)
    <p><a href="{{ route('portfolio.show', $project->id) }}">{{ $project->title }}</a></p>
@endforeach

@endsection