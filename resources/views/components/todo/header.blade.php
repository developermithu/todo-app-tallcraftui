<div class="flex items-center justify-between mb-8">
    <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
        Todo List</h1>
    <div class="text-sm text-gray-600">
        <span class="font-medium">{{ $completedCount }}/{{ $totalCount }}</span>
        Completed
    </div>
</div>

<div class="relative mb-8">
    <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
        <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-500 transition-all duration-500"
            style="width: {{ $totalCount > 0 ? ($completedCount / $totalCount) * 100 : 0 }}%">
        </div>
    </div>
</div>
