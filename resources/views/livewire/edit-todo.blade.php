<x-modal wire:model="showModal" center>
    <!-- Modal header -->
    <div class="flex items-center justify-between pb-3 border-b border-gray-200 rounded-t dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 capitalize dark:text-white">
            Update todo
        </h3>
    </div>

    <!-- Modal body -->
    <form wire:submit="updateTodo" class="pt-5 space-y-6">
        <x-input label="Name *" wire:model="form.name" lg />

        <select wire:model="form.priority"
            class="px-4 py-2.5 bg-gray-50 border w-full border-gray-200 rounded-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition">
            @foreach (App\Enums\PriorityEnum::cases() as $priority)
                <option value="{{ $priority->value }}">{{ $priority->label() }}</option>
            @endforeach
        </select>

        <x-toggle label="Completed" wire:model="form.is_complete" />

        <x-button label="Save" spinner="updateTodo" class="w-full" />
    </form>
</x-modal>
