@section('titulo', 'Portfolio')
@extends('navegacion')

@section('content')

<h1>Crear nuevo proyecto</h1>
<div class="row">
    <form action="{{ route('projects.store') }}" method="post">
        @csrf
        <div class="col-4">
            <label for="txtTitulo">Titulo</label>
            <input type="text" name="title" class="form-control" id="">
        </div>
        <div class="col-4">
            <label for="txtTitulo">Descripcion</label>
            <textarea type="text" name="description" class="form-control" id=""></textarea>
        </div>
        <div class="col-4">
            <label for="txtTitulo">URL</label>
            <input type="text" name="url" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

@endsection