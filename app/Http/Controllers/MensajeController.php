<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class MensajeController extends Controller
{
    public function __invoke()
    {
        // ...
    }
    public function store(){

        return "Formulario enviado";
    }
}
