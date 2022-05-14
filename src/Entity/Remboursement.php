<?php

namespace App\Entity;

use App\Repository\RemboursementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RemboursementRepository::class)]
class Remboursement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $dateDemande;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateValidation;

    #[ORM\Column(type: 'integer')]
    private $montant;

    #[ORM\Column(type: 'boolean')]
    private $valide;

    #[ORM\ManyToOne(targetEntity: Paiement::class, inversedBy: 'remboursements')]
    #[ORM\JoinColumn(nullable: false)]
    private $paiement_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(\DateTimeInterface $dateDemande): self
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getDateValidation(): ?\DateTimeInterface
    {
        return $this->dateValidation;
    }

    public function setDateValidation(?\DateTimeInterface $dateValidation): self
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getPaiementId(): ?Paiement
    {
        return $this->paiement_id;
    }

    public function setPaiementId(?Paiement $paiement_id): self
    {
        $this->paiement_id = $paiement_id;

        return $this;
    }
}
