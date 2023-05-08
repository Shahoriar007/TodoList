<?php

namespace App\Modules\Todolist\Http\Controllers\Lists;

use App\Http\Controllers\Controller;
use App\Modules\Todolist\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($id)
    {   
        $mainId = decrypt($id);
        $tasks = Task::where('list_id', $mainId)->latest()->paginate(10);
        
        return view("Todolist::allTasks", compact('tasks','mainId'));
    }

    public function create(Request $request)
    {   
        $request->validate(
            [
                'task' => 'required',
                'list_id' => 'required',
            ]
        );
        Task::taskAdd($request);

        return redirect()->route('all_tasks', encrypt($request->list_id));
    }

    public function destroy(Request $request)
    {
        Task::deleteTask($request);
        return back()->with('success_msg', 'Task deleted successfully.');
    }
}
