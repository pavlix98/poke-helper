<?php declare(strict_types=1);

namespace App\Scrappers;

use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

abstract class AbstractScrapper
{
    protected Client $web;

    public function __construct()
    {
        $this->web = Client::createChromeClient();
    }

    protected function request(string $url): Crawler
    {
        return $this->web->request('GET', $url);
    }
}
