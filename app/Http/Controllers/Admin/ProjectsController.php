<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects= Project:: all();
        return view ("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Recupero tutti i dati dalla richiesta
    $data = $request->all();

    // Creazione di una nuova istanza del modello Project
    $newProject = new Project();

    // Assegnazione di tutti i campi basati sulle colonne del database
    $newProject->name = $data["name"]; 
    $newProject->client = $data["client"]; 
    $newProject->period = $data["period"]; 
    $newProject->summary = $data["summary"]; 
    $newProject->description = $data["description"]; 
    $newProject->cover_image = $data["cover_image"]; 
    $newProject->github_link = $data["github_link"]; 
    $newProject->live_demo = $data["live_demo"]; 
    $newProject->tech_stack = $data["tech_stack"]; 

    // Salvataggio nel database
    $newProject->save();

    // Redirezione alla rotta index dei progetti
    return redirect()->route('projects.index', $newProject); 
}

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
