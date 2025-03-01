<?php

namespace App\Enums;

enum PriorityEnum: string
{
    case Low = 'low';
    case Medium = 'medium';
    case High = 'high';

    public function label(): string
    {
        return ucfirst($this->value);
    }

    public static function getLabel(string $value): string
    {
        return static::from($value)->label();
    }
}


