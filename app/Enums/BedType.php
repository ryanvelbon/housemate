<?php

namespace App\Enums;
use App\Traits\HasLabels;
use App\Traits\RandomEnumChoice;

enum BedType: string
{
    use HasLabels, RandomEnumChoice;

    case SINGLE_BED = 'single';
    case DOUBLE_BED = 'double';
    case SOFA_BED   = 'sofa';
    case NO_BED     = 'none';

    public function label(): string
    {
        return match($this) {
            static::SINGLE_BED => 'Single Bed',
            static::DOUBLE_BED => 'Double Bed',
            static::SOFA_BED   => 'Sofa Bed',
            static::NO_BED     => 'No Bed',
        };
    }
}