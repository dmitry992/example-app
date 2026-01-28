<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = [
            (object) [
                'project_name' => 'Проект 1',
                'user' => 'Владелец  1',
                'created_at' => '28.01.2026 13:45:12',
                'assignee' => 'Ответственный 1',
                'deadline_date' => '29.01.2026'
            ],
            (object) [
                'project_name' => 'Проект 2',
                'user' => 'Владелец 1',
                'created_at' => '28.01.2026 15:00:00',
                'assignee' => 'Ответственный 2',
                'deadline_date' => '30.01.2026'
            ]
        ];

        return view('pages.Projects.index', compact('projects'));
    }

    public function create()
    {
        return view('pages.Projects.create');
    }

    public function store()
    {
        return 'Сохранить проект';
    }

    public function show()
    {
        $project = (object) [
                'project_name' => 'Проект 1',
                'user' => 'Владелец  1',
                'created_at' => '28.01.2026 13:45:12',
                'assignee' => 'Ответственный 1',
                'deadline_date' => '29.01.2026'
        ];

        return view('pages.Projects.show', compact('project'));
    }

    public function edit()
    {
        $project = (object) [
            'id' => 2,
            'project_name' => 'Проект 2',
            'user' => 'Владелец 1',
            'created_at' => '28.01.2026 15:00:00',
            'assignee' => 'Ответственный 2',
            'deadline_date' => '30.01.2026'
        ];

        return view('pages.Projects.edit', compact('project'));
    }

    public function update($project)
    {
        return "Обновить проект $project";
    }

    public function destroy($project)
    {
        return "Удалить проект $project";
    }

}
