<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        return view('portfolio', [
            "projects" => Project::get()
        ]);
    }

    
}
