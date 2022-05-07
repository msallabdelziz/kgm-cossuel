<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\RecuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecuRepository::class)]
class Recu
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numero;

    #[ORM\Column(type: 'datetime')]
    private $dateEdition;

    #[ORM\OneToOne(targetEntity: Paiement::class, cascade: ['persist', 'remove'])]
    private $paiement;

    #[ORM\ManyToOne(targetEntity: Agent::class, inversedBy: 'recu')]
    private $caissier;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDateEdition(): ?\DateTimeInterface
    {
        return $this->dateEdition;
    }

    public function setDateEdition(\DateTimeInterface $dateEdition): self
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    public function getPaiement(): ?Paiement
    {
        return $this->paiement;
    }

    public function setPaiement(?Paiement $paiement): self
    {
        $this->paiement = $paiement;

        return $this;
    }

    public function getCaissier(): ?Agent
    {
        return $this->caissier;
    }

    public function setCaissier(?Agent $caissier): self
    {
        $this->caissier = $caissier;

        return $this;
    }

    public function __toString()
    {
        return "[".$this->getNumero()." ".$this->getDateEdition()->format("d/m/Y")."]";
    }
}
