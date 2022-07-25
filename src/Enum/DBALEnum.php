<?php declare(strict_types=1);

namespace App\Enum;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

abstract class DBALEnum extends Type
{
    /**
     * @return string[]
     */
    public static abstract function values(): array;

    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return 'ENUM(' . implode(', ', array_map(function (string $value) {
                return "'$value'";
            }, self::values())) . ')';
    }

    public function getName(): string
    {
        return self::class;
    }
}
