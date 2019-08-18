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

    public function create()
    {
    	return view('create');
    }

    public function store()
    {
    	$data = request()->all();

    	$todo = new Todo();
    	$todo->name = $data['name'];
    	$todo->description = $data['description'];
    	$todo->completed = 0;

    	$todo->save();

    	return redirect('/todos');
    }
}
