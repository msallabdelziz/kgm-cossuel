<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\TarifRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TarifRepository::class)]
class Tarif
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $usages;

    #[ORM\Column(type: 'string', length: 255)]
    private $puissance;

    #[ORM\Column(type: 'integer')]
    private $cout1;

    #[ORM\Column(type: 'integer')]
    private $cout2;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsages(): ?string
    {
        return $this->usages;
    }

    public function setUsages(string $usages): self
    {
        $this->usages = $usages;

        return $this;
    }

    public function getPuissance(): ?string
    {
        return $this->puissance;
    }

    public function setPuissance(string $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getCout1(): ?int
    {
        return $this->cout1;
    }

    public function setCout1(int $cout1): self
    {
        $this->cout1 = $cout1;

        return $this;
    }

    public function getCout2(): ?int
    {
        return $this->cout2;
    }

    public function setCout2(int $cout2): self
    {
        $this->cout2 = $cout2;

        return $this;
    }

    public function __toString()
    {
        return $this->getUsages();
    }
}
