<?php declare(strict_types=1);

namespace App\Command;

use App\Enum\PokemonTypeEnum;
use App\Services\ScrappingService;
use Doctrine\DBAL\Platforms\PostgreSQLPlatform;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:scrap', hidden: false)]
final class Scrap extends Command
{
    private ScrappingService $scrappingService;

    public function __construct(ScrappingService $scrappingService)
    {
        parent::__construct();
        $this->scrappingService = $scrappingService;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Running scrapper');
        $output->writeln('================');

        $pType = new PokemonTypeEnum();
        var_dump($pType->getSQLDeclaration([], new PostgreSQLPlatform()));
        die();

        $this->scrappingService->scrapPokemons();

        return Command::SUCCESS;
    }
}
