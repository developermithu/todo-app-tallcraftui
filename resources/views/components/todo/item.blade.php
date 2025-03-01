<div
    class="group flex items-center justify-between p-4 bg-white border border-gray-100 rounded-xl hover:shadow-sm duration-200">
    <div class="flex items-center gap-4 flex-1">
        {{-- Todo Checkbox --}}
        <button wire:click="toggleTodo({{ $todo->id }})" class="flex-shrink-0 focus:outline-none">
            @if ($todo->is_complete)
                <div
                    class="w-6 h-6 rounded-full bg-gradient-to-r from-green-400 to-green-500 flex items-center justify-center transform scale-110 transition-all duration-200">
                    <x-icon name="check" class="size-4 text-white" />
                </div>
            @else
                <div
                    class="w-6 h-6 border-2 border-gray-300 rounded-full hover:border-green-500 transition-colors duration-200">
                </div>
            @endif
        </button>

        {{-- Todo Content --}}
        <div class="flex-1">
            <span @class([
                'text-lg text-gray-700 transition-colors duration-200',
                '!text-gray-400 line-through' => $todo->is_complete,
            ])>
                {{ $todo->name }}
            </span>

            <div class="flex items-center gap-2 mt-1">
                @if ($todo->priority === 'high')
                    <x-badge :label="$todo->priority" red />
                @elseif ($todo->priority === 'medium')
                    <x-badge :label="$todo->priority" yellow />
                @else
                    <x-badge :label="$todo->priority" green />
                @endif

                <span class="text-xs text-gray-400">{{ $todo->created_at->diffForHumans() }}</span>
            </div>
        </div>
    </div>

    {{-- Todo Actions --}}
    <div class="flex items-center gap-2">
        <x-button wire:click="showEditModal({{ $todo->id }})" icon="pencil-square" flat circle gray />
        <x-button wire:click="destroy({{ $todo->id }})" icon="trash" flat circle red />
    </div>
</div>
