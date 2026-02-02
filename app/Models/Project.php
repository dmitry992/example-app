<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'user_id',
        'assignee_id',
        'deadline_date',
    ];
}
