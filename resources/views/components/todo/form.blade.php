<form wire:submit.prevent="addTodo" class="mb-8">
    <div class="flex items-start gap-3">
        <div class="flex-1">
            <x-input wire:model="form.name" placeholder="What needs to be done?" lg />
        </div>

        <select wire:model="form.priority"
            class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition">
            @foreach (App\Enums\PriorityEnum::cases() as $priority)
                <option value="{{ $priority }}"> {{ $priority }} </option>
            @endforeach
        </select>

        <x-button label="Add task" spinner="addTodo" lg />
    </div>
</form>
