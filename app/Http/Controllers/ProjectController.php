<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', [
            "projects" => Project::get()
        ]);
    }

    public function show($id){

        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }

    public function create(){
        return view('projects.create');
    }

    public function store(){
        
        Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]);

        return redirect()->route('projects.index');
    }

    public function edit($id){

        return view('projects.edit', [
            'project' => Project::findOrFail($id)
        ]);
    }
    
    public function update(){

        Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]);

        //minuto 1:58

        return redirect()->route('projects.index');
    }


    
}
