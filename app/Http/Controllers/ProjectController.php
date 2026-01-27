<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return 'Список проектов';
    }

    public function create()
    {
        return 'Создать проект';
    }

    public function store()
    {
        return 'Сохранить проект';
    }

    public function show($project)
    {
        return "Страница одного проекта $project";
    }

    public function edit($project)
    {
        return "Редактировать проект $project";
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
