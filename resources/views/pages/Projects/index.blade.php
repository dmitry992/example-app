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
        </div>
    </x-wrapper>

@endsection


