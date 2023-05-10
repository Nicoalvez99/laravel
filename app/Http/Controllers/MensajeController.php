<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MensajeController extends Controller
{
    public function __invoke()
    {
        // ...
    }
    public function store(Request $request)
    {
        $mensaje = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'asunto' => 'required',
            'descripcion' => 'required'
        ]);

        Mail::to('nicoalvez@gmail.com')->queue(new MensajeRecibido($mensaje));

        return "Mensaje enviado.";
    }
}
