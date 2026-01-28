@extends('layouts.project')

@section('title', 'Создать проект')
<style>
    .wrapper{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .wrapper-form{
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 10px 0;
    }
</style>
@section('content')
    <div class="wrapper">
        <form class="wrapper-form" action="/projects" method="POST">
            <div>
                <label for="project_name">Название проекта:</label>
                <input type="text" name="project_name" id="project_name">
            </div>

            <div>
                <label for="user_id">ID создателя:</label>
                <input type="text" name="user_id" id="user_id">
            </div>

            <div>
                <label for="assignee_id">ID исполнителя:</label>
                <input type="text" name="assignee_id" id="assignee_id">
            </div>

            <div>
                <label for="deadline_date">Крайний срок:</label>
                <input type="date" name="deadline_date" id="deadline_date">
            </div>

            <button type="submit" disabled>Создать проект</button>
        </form>
    </div>
@endsection

