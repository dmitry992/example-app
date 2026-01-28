@extends('layouts.project')

@section('title', $project->project_name)
@section('content')
    <div class="project">
        <h2>{{$project->project_name}}</h2>
        <p>Автор: <strong>{{$project->user}}</strong></p>
        <p>Проект создан: <strong>{{$project->created_at}}</strong></p>
        <p>Владелец: <strong>{{$project->assignee}}</strong></p>
        <p>Срок проекта до: <strong>{{$project->deadline_date}}</strong></p>
        <p></p>
    </div>
@endsection