<?php

namespace App\Modules\Todolist\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function taskAdd($request)
    {
        Task::create([
            'task' => $request->task,
            'list_id' => $request->list_id,
        ]);
    }
}
