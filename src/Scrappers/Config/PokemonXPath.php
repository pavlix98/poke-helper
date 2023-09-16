<?php declare(strict_types=1);

namespace App\Scrappers\Config;

final class PokemonXPath
{
    public const NAME = '//*[@id="content"]/main/div/table[4]/tbody/tr[2]/td[4]';
    public const NATIONAL_NUMBER = '//*[@id="content"]/main/div/table[4]/tbody/tr[2]/td[2]';
    public const TYPE_FIRST = '//*[@id="content"]/main/div/table[4]/tbody/tr[8]/td[2]/div/a/img';
    public const TYPE_SECOND = '//*[@id="content"]/main/div/table[4]/tbody/tr[8]/td[3]/div/a/img';
}
