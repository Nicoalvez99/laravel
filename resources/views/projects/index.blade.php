@section('titulo', 'Portfolio')
@extends('navegacion')

@section('content')

<h1>Portfolio</h1>
<button type="button" class="btn btn-danger"><a href="{{ route('projects.create') }}">Nuevo proyecto</a></button>
@foreach($projects as $project)
    <div class="d-flex">
        <p><a href="{{ route('projects.show', $project->id) }}">{{ $project->title }}</a></p>
        <a href="{{ route('projects.edit', $project) }}"> Editar</a>
    </div>
@endforeach

@endsection