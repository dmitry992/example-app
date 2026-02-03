<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'project_name'   => 'required|string|max:100',
            'user_id'     => 'required|integer|exists:users,id',
            'assignee_id' => 'required|integer|exists:users,id',
            'deadline_date'  => 'required|date|after:today',
        ];
    }

    public function messages(): array
    {
        return [
            'project_name.required'  => 'Название проекта обязательно',
            'project_name.max'  => 'Название проекта слишком большое',
            'user_id.required'       => 'Укажите владельца проекта',
            'assignee_id.required'   => 'Укажите ответственного',
            'deadline_date.required'    => 'Укажите крайний срок проекта',
            'deadline_date.after'    => 'Срок проекта должен быть в будущем',
        ];
    }

}
