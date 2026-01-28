@extends('layouts.project')

@section('title', $project->project_name)
@section('content')
    <x-wrapper>
        <x-project-item :project="$project"/>
    </x-wrapper>
@endsection