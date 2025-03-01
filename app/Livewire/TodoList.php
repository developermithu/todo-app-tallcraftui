<?php

namespace App\Livewire;

use App\Livewire\Forms\TodoForm;
use Developermithu\Tallcraftui\Traits\WithTcToast;
use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    use WithTcToast;

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
        $this->toast('Todo created successfully.');
    }

    public function updateTodo()
    {
        $this->form->update();
        $this->showModal = false;
        $this->toast('Todo updated successfully');
    }

    public function toggleTodo(Todo $todo)
    {
        $todo->is_complete = !$todo->is_complete;
        $todo->save();
        $this->toast('Status updated');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        $this->toast('Todo deleted successfully');
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