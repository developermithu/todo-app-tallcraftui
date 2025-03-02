<div class="min-h-screen bg-blue-200 py-8 px-4">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-xl overflow-hidden">
        <div class="p-8">
            <x-todo.header :$completedCount :$totalCount />

            <x-todo.form />

            <div class="space-y-4">
                @foreach ($todos as $todo)
                    <x-todo.item :key="$todo->id" :$todo />
                @endforeach
            </div>
        </div>
    </div>

    <x-footer-buttons />

    {{-- Edit Modal --}}
    @include('livewire.edit-todo')
</div>
