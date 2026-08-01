<?php

namespace App\Enums;

enum RaceTypeEnum: string
{
    case FAIRY = 'fairy';
    case CONTINENT = 'continent';

    public function toString(): string
    {
        return match ($this) {
            self::FAIRY => 'Фэйри',
            self::CONTINENT => 'Континент',
        };
    }
}
