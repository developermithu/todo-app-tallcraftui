<div class="min-h-screen bg-blue-200 py-8 px-4">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-xl overflow-hidden">
        <div class="p-8">
            <x-todo.header :$completedCount :$totalCount />

            <x-todo.form />

            <div class="space-y-4">
                @foreach ($todos as $todo)
                    <div class="group flex items-center justify-between p-4 bg-white border border-gray-100 rounded-xl hover:shadow-md transition-all duration-200 transform hover:-translate-y-1"
                        wire:key="{{ $todo->id }}">
                            <div class="flex items-center gap-4 flex-1">
                                <button wire:click="toggleTodo({{ $todo->id }})"
                                    class="flex-shrink-0 focus:outline-none">
                                    @if ($todo->is_complete)
                                        <div
                                            class="w-6 h-6 rounded-full bg-gradient-to-r from-green-400 to-green-500 flex items-center justify-center transform scale-110 transition-all duration-200">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                    @else
                                        <div
                                            class="w-6 h-6 border-2 border-gray-300 rounded-full hover:border-blue-500 transition-colors duration-200">
                                        </div>
                                    @endif
                                </button>
                                <div class="flex-1">
                                    <span
                                        class="{{ $todo->is_complete ? 'text-gray-400 line-through' : 'text-gray-700' }} text-lg transition-colors duration-200">
                                        {{ $todo->name }}
                                    </span>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span
                                            class="text-xs px-2 py-1 rounded-full {{ $todo->priority === 'high' ? 'bg-red-100 text-red-600' : ($todo->priority === 'medium' ? 'bg-yellow-100 text-yellow-600' : 'bg-green-100 text-green-600') }}">
                                            {{ ucfirst($todo->priority) }}
                                        </span>
                                        <span
                                            class="text-xs text-gray-400">{{ $todo->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-2">
                                <button wire:click="editTodo({{ $todo->id }})"
                                    class="text-gray-400 hover:text-blue-500 transition-colors duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </button>

                                <button wire:click="destroy({{ $todo->id }})"
                                    class="text-gray-400 hover:text-red-500 transition-colors duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
