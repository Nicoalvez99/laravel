@section('titulo', 'Editar proyecto')
@extends('navegacion')

@section('content')

<h1>Formulario de Edicion</h1>
<div class="row">
    <form action="{{ route('projects.update', $project) }}" method="post">
        @csrf @method('patch')
        <div class="col-4">
            <label for="txtTitulo">Titulo</label>
            <input type="text" name="title" class="form-control" id="" value="{{ old('title', $project->title) }}">
        </div>
        <div class="col-4">
            <label for="txtDescripcion">Descripcion</label>
            <textarea type="text" name="description" class="form-control" id="">{{ old('description', $project->description) }}</textarea>
        </div>
        <div class="col-4">
            <label for="txtUrl">URL</label>
            <input type="text" name="url" class="form-control" id="" value="{{ old('url', $project->url) }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<a href="{{ route('projects.index') }}">Regresar</a>
@endsection