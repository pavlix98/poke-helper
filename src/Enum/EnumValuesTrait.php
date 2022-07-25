<?php declare(strict_types=1);

namespace App\Enum;

use ReflectionClass;
use ReflectionClassConstant;

trait EnumValuesTrait
{
    /**
     * Returns value of every public constant defined in class
     */
    public static function values(): array
    {
        $reflection = new ReflectionClass(self::class);

        return array_values($reflection->getConstants(ReflectionClassConstant::IS_PUBLIC));
    }
}
