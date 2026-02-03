@props(['project' => 'null'])
<div class="project">
    <div style="margin-bottom: 10px;">
        <h2>{{$project->project_name}}</h2>
        <p>Автор: <strong>{{$project->owner->username ?? 'Не указан'}}</strong></p>
        <p>Проект создан: <strong>{{$project->created_at}}</strong></p>
        <p>Владелец: <strong>{{$project->assignee->username ?? 'Не указан'}}</strong></p>
        <p>Срок проекта до: <strong>{{$project->deadline_date}}</strong></p>
    </div>
    <div class="project-actions">
        <a href="{{ route('projects.edit', ['project' => $project->id, 'access' => 'yes']) }}">
            <x-button>Редактировать</x-button>
        </a>

        <x-form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <input type="hidden" name="access" value="yes">
            <x-button>Удалить</x-button>
        </x-form>
    </div>
</div>