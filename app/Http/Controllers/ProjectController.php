<?php

namespace App\Http\Controllers;

use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Requests\Project\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::with(['owner', 'assignee'])->get();

        return view('pages.Projects.index', compact('projects'));
    }

    public function create()
    {
        return view('pages.Projects.create');
    }

    public function store(StoreProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.create', ['access' => 'yes'])->with('success', 'Проект создан');
    }

    public function show($id)
    {
        $project = Project::with(['owner', 'assignee'])->findOrFail($id);

        return view('pages.Projects.show', compact('project'));
    }

    public function edit($id)
    {

        $project = Project::findOrFail($id);

        return view('pages.Projects.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);

        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('success', 'Проект редактирован');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index');
    }

}
