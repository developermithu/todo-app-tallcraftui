<?php

namespace Database\Seeders;

use App\Enums\PriorityEnum;
use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run(): void
    {
        $todos = [
            [
                'name' => 'Complete project documentation',
                'priority' => PriorityEnum::High->value,
                'is_complete' => false,
                'created_at' => now(),
            ],
            [
                'name' => 'Review pull requests',
                'priority' => PriorityEnum::Medium->value,
                'is_complete' => false,
                'created_at' => now()->subDays(value: 3),
            ],
            [
                'name' => 'Update dependencies',
                'priority' => PriorityEnum::Low->value,
                'is_complete' => true,
                'created_at' => now()->subWeek(),
            ],
            [
                'name' => 'Plan next sprint',
                'priority' => PriorityEnum::High->value,
                'is_complete' => false,
                'created_at' => now()->subDays(),
            ],
            [
                'name' => 'Setup development environment',
                'priority' => PriorityEnum::Medium->value,
                'is_complete' => true,
                'created_at' => now()->subMonth(),
            ],
        ];

        foreach ($todos as $todo) {
            Todo::create($todo);
        }
    }
}