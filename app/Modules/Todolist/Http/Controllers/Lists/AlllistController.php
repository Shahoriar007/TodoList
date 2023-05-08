<?php

namespace App\Modules\Todolist\Http\Controllers\Lists;

use App\Http\Controllers\Controller;
use App\Modules\Todolist\Models\Alllist;
use Illuminate\Http\Request;

class AlllistController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $lists = Alllist::where('user_id', auth()->id())->latest()->paginate(6);
        
        return view("Todolist::allLists",compact('lists'));
    }

    public function create(Request $request)
    {   
        $request->validate(
            [
                'name' => 'required',
    
            ]
        );
        Alllist::ListAdd($request);

        return redirect()->route('all_lists');
    }

    public function edit(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
            ]
        );
        Alllist::editList($request);

        return redirect()->route('all_lists');
    }


    public function destroy(Request $request)
    {
        Alllist::deleteList($request);
        return back()->with('all_lists');
    }
}
