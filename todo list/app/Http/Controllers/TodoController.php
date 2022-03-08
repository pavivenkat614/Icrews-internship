<?php

namespace App\Http\Controllers;



class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }
    public function create()
    {
        return view('todos.create');
    }
}
