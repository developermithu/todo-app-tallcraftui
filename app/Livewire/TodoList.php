<?php

namespace App\Livewire;

use App\Livewire\Forms\TodoForm;
use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public TodoForm $form;

    public function addTodo()
    {
        $this->form->store();
        $this->dispatch('todo-added');
    }

    public function updateTodo()
    {
        $this->form->update();
    }

    public function toggleTodo($id)
    {
        $todo = Todo::find($id);
        $todo->is_complete = !$todo->is_complete;
        $todo->save();
    }

    public function destroy($id)
    {
        Todo::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => Todo::latest('created_at')->get(),
            'completedCount' => Todo::completed()->count(),
            'totalCount' => Todo::count()
        ]);
    }
}