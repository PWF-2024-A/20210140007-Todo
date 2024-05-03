<?php

namespace App\Http\Controllers;

use Database\Factories\TodoFactory;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = TodoFactory::where('user_id', auth()->user()->id)
        ->orderBy('is_complete', 'asc')
        ->orderBy('created_at', 'desc')
        ->get();
        dd($todos);

        return view('todo.index');
    }
    public function create()
    {
        return view('todo.create');
    }
    public function edit()
    {
        return view('todo.edit');
    }
    public function store(Request $request, TodoFactory $todo){

        $request->validate([
            'title' => 'required|max:255',
        ]);

        $todo = Todo::create([
            'title' => ucfirst($request->title),
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('todo.index')->with('success', 'Todo created successfully!');

    }

}
