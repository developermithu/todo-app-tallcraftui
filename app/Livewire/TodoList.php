<?php

namespace App\Livewire;

use App\Livewire\Forms\TodoForm;
use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public TodoForm $form;

    public bool $showModal = false;

    public function showEditModal(Todo $todo)
    {
        $this->form->setTodo($todo);
        $this->showModal = true;
    }

    public function addTodo()
    {
        $this->form->store();
        $this->dispatch('todo-added');
    }

    public function updateTodo()
    {
        $this->form->update();
        $this->showModal = false;
    }

    public function toggleTodo(Todo $todo)
    {
        $todo->is_complete = !$todo->is_complete;
        $todo->save();
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
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