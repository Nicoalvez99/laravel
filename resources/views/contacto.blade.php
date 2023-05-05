@section('titulo', 'Contacto')

@extends('navegacion')

@section('content')

<h1>Contacto</h1>
<div class="row">
    <div class="col-4">
        <form method="post" action="{{ route('contacto') }}">
            @csrf
            <input type="text" placeholder="Nombre..." class="form-control my-2">
            <input type="email" placeholder="Email..." class="form-control my-2">
            <input type="text" placeholder="Asunto..." class="form-control my-2">
            <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje..." class="form-control my-2"></textarea>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

@endsection