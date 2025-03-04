<div class="flex items-center justify-between mb-8">
    <h1 class="text-3xl font-bold text-primary">
        <a wire:navigate href="/">Todo List</a>
    </h1>
    <div class="text-sm text-gray-600">
        <span class="font-medium">{{ $completedCount }}/{{ $totalCount }}</span>
        Completed
    </div>
</div>

<div class="relative mb-8">
    <x-progress :value="$totalCount > 0 ? ($completedCount / $totalCount) * 100 : 0" without-value />
</div>
