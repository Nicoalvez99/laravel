<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio', [
            "projects" => Project::get()
        ]);
    }

    public function show($id){

        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }
    


    
}
