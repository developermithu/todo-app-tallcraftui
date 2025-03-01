<form wire:submit.prevent="addTodo" class="mb-8">
    <div class="flex items-center gap-3">
        <input type="text" wire:model="form.name" placeholder="What needs to be done?"
            class="flex-1 px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition placeholder-gray-400">

        <select wire:model="form.priority"
            class="px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
            @foreach (App\Enums\PriorityEnum::cases() as $priority)
                <option value="{{ $priority }}"> {{ $priority }} </option>
            @endforeach
        </select>

        <button type="submit"
            class="px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-lg hover:from-blue-600 hover:to-indigo-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition transform hover:scale-105 duration-200">
            Add Task
        </button>
    </div>

    @error('form.name')
        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
    @enderror
</form>
