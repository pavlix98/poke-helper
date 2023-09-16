<?php declare(strict_types=1);

namespace App\Scrappers;

use App\Scrappers\Config\PokemonXPath;
use App\Utils\Utils\PathConstructor;
use App\Entity;

class Pokemon extends AbstractScrapper implements ScrapperInterface
{
    private const POKEMON_PAGE_TEMPLATE = 'https://serebii.net/pokedex-rs/<<pokemonNo>>.shtml';

    private function getUrlAddresses(): iterable
    {
        for ($i = 1; $i <= 386; $i++) {
            $noString = str_pad((string) $i, 3, '0', STR_PAD_LEFT);

            yield PathConstructor::construct(self::POKEMON_PAGE_TEMPLATE, [
                'pokemonNo' => $noString,
            ]);
        }
    }

    /**
     * @return Pokemon[]
     */
    public function scrap(): iterable
    {
        foreach ($this->getUrlAddresses() as $address) {
            $crawler = $this->request($address);

            $name = $crawler->filterXPath(PokemonXPath::NAME)->getText();

            $nationalNumber = $crawler->filterXPath(PokemonXPath::NATIONAL_NUMBER)->getText();

            $typeFirstImage = $crawler->filterXPath(PokemonXPath::TYPE_FIRST)->getAttribute('src');
            $typeFirst = basename($typeFirstImage, '.gif');

            $typeSecondImage = $crawler->filterXPath(PokemonXPath::TYPE_SECOND)->getAttribute('src');
            $typeSecond = basename($typeSecondImage, '.gif');

            yield new Entity\Pokemon($name, (int) $nationalNumber, $typeFirst, $typeSecond != 'na' ? $typeSecond : null);
        }
    }
}
