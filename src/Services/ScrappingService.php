<?php
declare(strict_types=1);

namespace App\Services;

use App\Scrappers\Pokemon;

class ScrappingService
{
    private Pokemon $pokemonScrapper;

    public function __construct(Pokemon $pokemonScrapper)
    {

        $this->pokemonScrapper = $pokemonScrapper;
    }

    public function scrapPokemons(): void
    {
        foreach ($this->pokemonScrapper->scrap() as $pokemon) {
            var_dump($pokemon);
        }
    }
}
