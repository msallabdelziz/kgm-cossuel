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
    private $coutPremierIns;

    #[ORM\Column(type: 'integer')]
    private $coutDeuxiemeIns;

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

    public function getCoutPremierIns(): ?int
    {
        return $this->coutPremierIns;
    }

    public function setCoutPremierIns(int $coutPremierIns): self
    {
        $this->coutPremierIns = $coutPremierIns;

        return $this;
    }

    public function getCoutDeuxiemeIns(): ?int
    {
        return $this->coutDeuxiemeIns;
    }

    public function setCoutDeuxiemeIns(int $coutDeuxiemeIns): self
    {
        $this->coutDeuxiemeIns = $coutDeuxiemeIns;

        return $this;
    }
}
