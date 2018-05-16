<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'content',
        'due',
        'tags',
        'attachments',
        'workflow',
        'status',
        'subtasks',
        'project',
        'creater',
        'owner',
        'followers',
    ];
}
