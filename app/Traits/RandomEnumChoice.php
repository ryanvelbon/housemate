<?php

namespace App\Traits;

trait RandomEnumChoice
{
    public static function random(): self
    {
        $cases = self::cases();
        return $cases[array_rand($cases)];
    }
}