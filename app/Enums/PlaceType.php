<?php

namespace App\Enums;
use App\Traits\HasLabels;
use App\Traits\RandomEnumChoice;

enum PlaceType: string
{
    use HasLabels, RandomEnumChoice;

    case ENTIRE_PLACE = 'entire';
    case PRIVATE_ROOM = 'private';
    case SHARED_ROOM  = 'shared';

    public function label(): string
    {
        return match($this) {
            static::ENTIRE_PLACE => 'Entire Place',
            static::PRIVATE_ROOM => 'Private Room',
            static::SHARED_ROOM  => 'Shared Room',
        };
    }
}