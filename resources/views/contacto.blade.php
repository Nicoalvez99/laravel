@section('titulo', 'Contacto')

@extends('navegacion')

@section('content')

<h1>Contacto</h1>
<div class="row">
    <div class="col-4">
        <form method="post" action="{{ route('contacto') }}">
            @csrf
            <input type="text" name="name" placeholder="Nombre..." class="form-control my-2" value="{{ old('name') }}">
            {!! $errors->first('name', '<small style="color: red;">:message</small><br>') !!}
            <input type="email" name="email" placeholder="Email..." class="form-control my-2" value="{{ old('email') }}">
            {!! $errors->first('email', '<small style="color: red;">:message</small><br>') !!}
            <input name="asunto" placeholder="Asunto..." class="form-control my-2" value="{{ old('asunto') }}">
            {!! $errors->first('asunto', '<small style="color: red;">:message</small><br>') !!}
            <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Mensaje..." class="form-control my-2">{{ old('descripcion') }}</textarea>
            {!! $errors->first('descripcion', '<small style="color: red;">:message</small><br>') !!}
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

@endsection