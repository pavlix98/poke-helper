<?php declare(strict_types=1);

namespace App\Scrappers;

interface ScrapperInterface
{
    public function scrap(): iterable|object;
}
