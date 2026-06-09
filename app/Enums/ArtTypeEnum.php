<?php

namespace App\Enums;

enum ArtTypeEnum: string
{
    case TOTAL = 'total';
    case DARK = 'dark';

    public function toString(): string
    {
        return match ($this) {
            self::TOTAL => 'Общие',
            self::DARK => 'Темные',
        };
    }
}
