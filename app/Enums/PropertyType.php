<?php

namespace App\Enums;

use App\Traits\HasLabels;
use App\Traits\RandomEnumChoice;

enum PropertyType: string
{
    use HasLabels, RandomEnumChoice;

    case HOUSE = 'house';
    case BUNGALOW = 'bungalow';
    case CABIN = 'cabin';
    case CONDO = 'condo';
    case COTTAGE = 'cottage';
    case TOWNHOUSE = 'townhouse';
    case VILLA = 'villa';

    public function label(): string
    {
        return match($this) {
            static::HOUSE => 'House',
            static::BUNGALOW => 'Bungalow',
            static::CABIN => 'Cabin',
            static::CONDO => 'Condominium',
            static::COTTAGE => 'Cottage',
            static::TOWNHOUSE => 'Townhouse',
            static::VILLA => 'Villa',
        };
    }
}
