<?php declare(strict_types=1);

namespace App\Enum;

final class PokemonTypeEnum extends DBALEnum implements EnumInterface
{
    use EnumValuesTrait;

    public const
        BUG = 'bug',
        DARK = 'dark',
        DRAGON = 'dragon',
        ELECTRIC = 'electric',
        FIGHT = 'fight',
        FIRE = 'fire',
        FLYING = 'flying',
        GHOST = 'ghost',
        GRASS = 'grass',
        GROUND = 'ground',
        ICE = 'ice',
        NORMAL = 'normal',
        POISON = 'poison',
        PSYCHIC = 'psychic',
        ROCK = 'rock',
        STEEL = 'steel',
        WATER = 'water',
        SHADOW = 'shadow';
}
