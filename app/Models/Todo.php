<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'priority', 'is_complete'];

    protected function casts(): array
    {
        return [
            'is_complete' => 'boolean',
        ];
    }

    public function scopeCompleted(Builder $query): Builder
    {
        return $query->where('is_complete', operator: true);
    }
}