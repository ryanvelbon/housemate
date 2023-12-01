<?php

namespace App\Traits;

trait HasLabels {

    public function label(): string {
        // Assuming the label method is defined on the enum class using the trait
        return match($this) {
            // ...
        };
    }

    public static function toArray(): array {
        return array_combine(
            array_map(fn($case) => $case->value, self::cases()),
            array_map(fn($case) => $case->label(), self::cases())
        );
    }
}
