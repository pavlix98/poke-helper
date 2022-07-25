<?php declare(strict_types=1);

namespace App\Enum;

interface EnumInterface
{
    /**
     * Returns array of all enum values
     */
    public static function values(): array;
}
