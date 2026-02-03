@extends('layouts.project')

@section('title', $project->project_name)
@section('content')
    <x-wrapper>
        <x-alert />
        <x-project-item :project="$project"/>
        <a href="{{ route('projects.index') }}">
            <x-button>Все проекты</x-button>
        </a>
    </x-wrapper>
@endsection
