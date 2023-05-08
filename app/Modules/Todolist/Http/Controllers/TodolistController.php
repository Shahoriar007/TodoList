<?php

namespace App\Modules\Todolist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodolistController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("Todolist::welcome");
    }
}
