<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{

    use HandlesAuthorization;

    /**
     * Просмотр списка проектов
     */
    public function viewAny(User $authUser): bool
    {
        return true;
    }

    /**
     * Просмотр одного проекта
     */
    public function view(User $authUser, Project $project): bool
    {
        return true;
    }

    /**
     * Создание проекта
     */
    public function create(User $authUser): bool
    {
        return true;
    }

    /**
     * Редактирование проекта
     */
    public function update(User $authUser, Project $project): bool
    {
        return $authUser->id === $project->user_id;
    }

    /**
     * Удаление проекта
     */
    public function delete(User $authUser, Project $project): bool
    {
        return $authUser->id === $project->user_id;
    }

}
