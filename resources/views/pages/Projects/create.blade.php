@extends('layouts.project')

@section('title', 'Создать проект')

@section('content')

    <x-wrapper>
        <x-alert type="success" title="Успешно">
            Проект создан
        </x-alert>
        <x-form class="wrapper-form" action="{{ route('projects.store') }}" method="POST">
            <div>
                <x-label for="project_name">Название проекта:</x-label>
                <x-input name="project_name" id="project_name"/>
            </div>

            <div>
                <x-label for="user_id">ID создателя:</x-label>
                <x-input name="user_id" id="user_id"/>
            </div>

            <div>
                <x-label for="assignee_id">ID исполнителя:</x-label>
                <x-input name="assignee_id" id="assignee_id"/>
            </div>

            <div>
                <x-label for="deadline_date">Крайний срок:</x-label>
                <x-input type="date" name="deadline_date" id="deadline_date"/>
            </div>

            <x-button disabled>Создать проект</x-button>
        </x-form>
    </x-wrapper>

@endsection

