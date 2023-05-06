<?php

namespace App\Modules\Todolist\Http\Controllers\Lists;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Todolist::allLists");
    }
}
