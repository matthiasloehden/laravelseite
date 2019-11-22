<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerienController extends Controller
{
    //
    public function index()
    {
        $serien = serien::all();
        return view('serien', [
            "serien" => $serien,
        ]);
    }
    public function store()
    {
        todo::create($this->validateTodos());
        return redirect(todo::path());
    }
    public function destroy(todo $todo){
        $todo->delete();
        return redirect(todo::path());
    }

    public function edit(todo $todo)
    {
        return view("todoedit",compact("todo"));
    }

    public function update(todo $todo)
    {
        $todo->update($this->validateTodos());
        return redirect(todo::path());
    }
    public function confirmdelete(todo $todo)
    {
        return view("tododelete",compact("todo"));
    }
    protected function validateTodos(){
        return request()->validate([
            "aufgabe" => ["required", "min:3"],
            "beschreibung" => "required",
            "abgabetermin"
        ]);
    }

}
