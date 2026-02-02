@props(['project' => 'null'])

<div class="project">
    <h2>{{$project->project_name}}</h2>
    <p>Автор Id: <strong>{{$project->user_id}}</strong></p>
    <p>Проект создан: <strong>{{$project->created_at}}</strong></p>
    <p>Владелец Id: <strong>{{$project->assignee_id}}</strong></p>
    <p>Срок проекта до: <strong>{{$project->deadline_date}}</strong></p>
</div>