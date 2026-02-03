@extends('layouts.project')
@section('title', 'Список проектов')

@section('content')
    <x-wrapper>
        <div class="projects">
            @if(empty($projects))
                Нет ни одного проекта
            @else
                @foreach($projects as $project)
                    <x-project-item :project="$project"/>
                @endforeach
            @endif
            <a href="{{ route('projects.create', ['access' => 'yes']) }}">
                <x-button>Создать новый проект</x-button>
            </a>
        </div>
    </x-wrapper>

@endsection


