@extends('layouts.project')

@section('title', "Редактировать $project->project_name")
@section('content')
    <x-wrapper>
        <x-alert />
        <x-form class="wrapper-form" action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="access" value="yes">
            <div>
                <x-label for="project_name">Название проекта:</x-label>
                <x-input name="project_name" id="project_name" value="{{ old('project_name', $project->project_name) }}"/>
            </div>

            <div>
                <x-label for="user_id">Создатель:</x-label>
                <x-input type="text" name="user_id" id="user_id" value="{{ old('user_id', $project->user_id) }}"/>
            </div>

            <div>
                <x-label for="assignee_id">Исполнитель:</x-label>
                <x-input type="text" name="assignee_id" id="assignee_id" value="{{ old('assignee_id', $project->assignee_id) }}"/>
            </div>

            <div>
                <x-label for="deadline_date">Крайний срок:</x-label>
                <x-input type="date" name="deadline_date" id="deadline_date" value="{{ old('deadline_date', $project->deadline_date ? date('Y-m-d', strtotime($project->deadline_date)) : '') }}"/>
            </div>

            <x-button>Редактировать проект</x-button>
        </x-form>
        <a href="{{ route('projects.index') }}">
            <x-button>Все проекты</x-button>
        </a>
    </x-wrapper>
@endsection
