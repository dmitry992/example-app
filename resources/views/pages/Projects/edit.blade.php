@extends('layouts.project')

@section('title', "Редактировать $project->project_name")
@section('content')
    <x-wrapper>
        <x-form class="wrapper-form" action="{{ route('projects.update', $project->id) }}" method="POST">
            <div>
                <x-label for="project_name">Название проекта:</x-label>
                <x-input name="project_name" id="project_name" value="{{$project->project_name}}"/>
            </div>

            <div>
                <x-label for="user_id">Создатель:</x-label>
                <x-input type="text" name="user_id" id="user_id" value="{{$project->user}}"/>
            </div>

            <div>
                <x-label for="assignee_id">Исполнитель:</x-label>
                <x-input type="text" name="assignee_id" id="assignee_id" value="{{$project->assignee}}"/>
            </div>

            <div>
                <x-label for="deadline_date">Крайний срок:</x-label>
                <x-input type="date" name="deadline_date" id="deadline_date" value="{{date('Y-m-d', strtotime($project->deadline_date))}}"/>
            </div>

            <x-button disabled>Редактировать проект</x-button>
        </x-form>
    </x-wrapper>
@endsection
