<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
    	$todos = Todo::all();
    	return view('index', compact('todos'));
    }

    public function show($todo)
    {
    	$todo_found = Todo::find($todo);

    	return view('show', compact('todo_found'));
    }
}
