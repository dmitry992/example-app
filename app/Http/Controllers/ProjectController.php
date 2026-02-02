<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


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

    public function store(Request $request)
    {
        Project::create($request->only([
            'project_name',
            'user_id',
            'assignee_id',
            'deadline_date',
        ]));

        return redirect()->route('projects.index');
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

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $project->update($request->only([
            'project_name',
            'user_id',
            'assignee_id',
            'deadline_date',
        ]));

        return redirect()->route('projects.show', $project);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index');
    }

}
