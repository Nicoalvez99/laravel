@section('titulo', $project->title)
@extends('navegacion')

@section('content')

@include('partials.session-status')

<h1>{{ $project->title }}</h1>
<p>{{ $project->description }}</p>
<form action="{{ route('projects.destroy', $project) }}" method="post"> <!-- a la ruta projects.destroy le paso como parametro el proyecto asi va toda la info por ahi  -->
    @csrf @method('DELETE')
    <button class="btn btn-danger">Eliminar</button>
</form>
<p>{{ $project->created_at->diffForHumans() }}</p>

@endsection