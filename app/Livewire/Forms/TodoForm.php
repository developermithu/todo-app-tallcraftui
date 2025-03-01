<?php

namespace App\Livewire\Forms;

use App\Models\Todo;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TodoForm extends Form
{
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|in:low,medium,high')]
    public string $priority = 'low';

    #[Validate('nullable|boolean')]
    public bool $isComplete = false;

    public ?Todo $todo;

    public function setTodo(?Todo $todo)
    {
        $this->todo = $todo;

        $this->name = $todo->name;
        $this->priority = $todo->priority;
        $this->isComplete = $todo->is_complete;
    }

    public function store()
    {
        $this->validate();

        Todo::create([
            'name' => $this->name,
            'priority' => $this->priority,
            'is_complete' => $this->isComplete,
        ]);

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $this->todo->update([
            'name' => $this->name,
            'priority' => $this->priority,
            'is_complete' => $this->isComplete,
        ]);

        $this->reset();
    }
}
