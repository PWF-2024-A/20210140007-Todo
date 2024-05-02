<?php

namespace App\Http\Controllers;

use Database\Factories\TodoFactory;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = TodoFactory::where('user_id', auth()->user()->id)->get();
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
}
