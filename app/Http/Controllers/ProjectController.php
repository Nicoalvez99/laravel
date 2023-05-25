<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveProjectRequest;
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

    public function store(Project $project){
        
        //Project::create( $request->validated() );//devuelve los input validados en rules de SaveProjectRequest así no hay ninguna inyección de valores malintencionados.
        $project->create([
            'title' => request('title'),
            'description' => request('description'),
            'url' => request('url')
        ]);
        return redirect()->route('projects.index')->with('status', 'Proyecto creado exitosamente.');
    }

    public function edit($id){

        return view('projects.edit', [
            'project' => Project::findOrFail($id)
        ]);
    }
    
    public function update(Project $project){

        $project->update([
            'title' => request('title'),
            'description' => request('description'),
            'url' => request('url')
        ]);

        return redirect()->route('projects.show', $project)->with('status', 'Proyecto actualizado correctamente');
    }


    public function destroy(Project $project){
        
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'Proyecto eliminado correctamente');
    }

    
}
