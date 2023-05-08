<?php

namespace App\Modules\Todolist\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alllist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function ListAdd($request)
    {
        Alllist::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ]);
    }

    public static function editList($request)
    {
        $id = decrypt($request->id);
        $data = Alllist::find($id);

        $data->name = $request->name;
        $data->save();
    }

    public static function deleteList($request)
    {
        $id = decrypt($request->id);
        $data = Alllist::find($id);
        if ($data) {
            $data->delete();
        }
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
