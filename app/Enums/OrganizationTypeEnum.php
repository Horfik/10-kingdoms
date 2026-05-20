<?php

namespace App\Enums;

enum OrganizationTypeEnum: string
{
    case IN_LAW = 'in-law';
    case NOT_IN_LAW = 'not-in-law';
    case UNCONFIRMED = 'unconfirmed';

    public function toString(): string
    {
        return match ($this) {
            self::IN_LAW => 'Законные',
            self::NOT_IN_LAW => 'Запрещенные',
            self::UNCONFIRMED => 'Неподтвержденные',
        };
    }
}
