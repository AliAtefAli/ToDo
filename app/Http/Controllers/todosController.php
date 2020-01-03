<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class todosController extends Controller
{
    // Default controller
    public function index() {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function todos() {
        return view('todos.todos')->with('todos', Todo::all());
    }
    // Show controller
    public function show($todoId) {
        return view('todos.show')->with('todo', Todo::Find($todoId));
    }
    // create Controller
    public function create() {
        return view('todos/create');
    }
    // Edit The todo
    public function edit($todoId) {
      // Get From The database
      $todo = Todo::Find($todoId);
      
      return view('/todos/edit')->with('todo', Todo::Find($todoId));
    }
    public function update($todoId) {
      // Validate The data
      $this->validate(request(), [
        'name' => 'required|min:6|max:12',
        'description' => 'required'
      ]);
      // Get data from Form
      $data = request()->all();

      $todo = Todo::find($todoId);
      // Set The data
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->age = 20;
      $todo->completed = false;
      // Insert The data
      $todo->save();

      // Redirect to The todos page
      return redirect('/todos');
    }
    // Store the data
    public function store() {
        // Validate The data
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);
        // Get data from Form
        $data = request()->all();

        $todo = new Todo();
        // Set The data
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->age = 20;
        $todo->completed = false;
        // Insert The data
        $todo->save();

        // Redirect to The todos page
        return redirect('/todos');
    }
    // Delete The todo
    public function delete($todoId) {
      // The syntax
      // Get The todo
      $todo = Todo::Find($todoId);
      // Delete It
      $todo->delete();

      return redirect('/todos');
    }
}
