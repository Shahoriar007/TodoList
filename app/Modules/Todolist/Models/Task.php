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

    public static function editTask($request)
    {
        $id = decrypt($request->id);
        $data = Task::find($id);

        $data->task = $request->task;
        $data->save();
    }

    public static function deleteTask($request)
    {
        $id = decrypt($request->id);

        $data = Task::find($id);

        if ($data) {
            $data->delete();
        }
    }

    public function alllists()
    {
        return $this->belongsTo(Alllist::class);
    }
}
