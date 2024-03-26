<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('pages.dashboard.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {

        $val_data = $request->validated();

        //generiamo lo slug in modo dinamico
        $slug = Project::generateSlug($request->title);

        $val_data['slug'] = $slug;


        $new_project = Project::create($val_data);

        return redirect()->route('dashboard.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $projects)
    {
        return view('pages.dashboard.show', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projects = Project::findOrFail($id);

        return view('pages.dashboard.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, string $id)
    {
        $formData = $request->all();

        $projects = Project::find($id);

        $projects->update($formData);

        return redirect()->route('dashboard.project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projects = Project::find($id);

        $projects->delete();

        return redirect()->route('dashboard.project.index');
    }
}
