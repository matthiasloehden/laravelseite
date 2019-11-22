<?php


namespace App\Http\Controllers;
use App\titel;
use App\todo;

class todocontroller extends Controller
{
    public function index()
    {
        $todos = todo::all();
        return view('todo', [
            "todos" => $todos,
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

    protected function validateTodos(){
        return request()->validate([
            "aufgabe" => ["required", "min:3"],
            "beschreibung" => "required",
            "abgabetermin"
        ]);
    }

}
