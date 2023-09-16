<?php declare(strict_types=1);

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
final class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $name;

    #[ORM\Column(unique: true)]
    private int $nationalNumber;

    #[ORM\Column(length: 255)]
    private string $typeFirst;

    #[ORM\Column(length: 255)]
    private ?string $typeSecond;

    public function __construct(string $name, int $nationalNumber, string $typeFirst, string|null $typeSecond = null)
    {
        $this->name = $name;
        $this->nationalNumber = $nationalNumber;
        $this->typeFirst = $typeFirst;
        $this->typeSecond = $typeSecond;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNationalNumber(): int
    {
        return $this->nationalNumber;
    }

    public function setNationalNumber(int $nationalNumber): self
    {
        $this->nationalNumber = $nationalNumber;

        return $this;
    }

    public function getTypeFirst(): string
    {
        return $this->typeFirst;
    }

    public function setTypeFirst(string $typeFirst): self
    {
        $this->typeFirst = $typeFirst;

        return $this;
    }

    public function getTypeSecond(): string|null
    {
        return $this->typeSecond;
    }

    public function setTypeSecond(string|null $typeSecond): self
    {
        $this->typeSecond = $typeSecond;

        return $this;
    }
}
