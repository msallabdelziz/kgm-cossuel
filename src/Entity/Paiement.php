<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\PaiementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
class Paiement
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[ORM\Column(type: 'datetime')]
    private $datePaiement;

    #[ORM\Column(type: 'string', length: 255)]
    private $mode;

    #[ORM\Column(type: 'string', length: 255)]
    private $reference;

    #[ORM\Column(type: 'string', length: 255)]
    private $motifRemboursement;

    #[ORM\Column(type: 'string', length: 255)]
    private $motifRejet;

    #[ORM\Column(type: 'string', length: 255)]
    private $etatRembousement;

    #[ORM\Column(type: 'datetime')]
    private $dateFacture;

    #[ORM\Column(type: 'boolean')]
    private $paiementEffectue;

    #[ORM\OneToOne(targetEntity: Demande::class, cascade: ['persist', 'remove'])]
    private $demande;

    #[ORM\ManyToOne(targetEntity: Comptable::class, inversedBy: 'paiement')]
    private $comptable;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(\DateTimeInterface $datePaiement): self
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getMotifRemboursement(): ?string
    {
        return $this->motifRemboursement;
    }

    public function setMotifRemboursement(string $motifRemboursement): self
    {
        $this->motifRemboursement = $motifRemboursement;

        return $this;
    }

    public function getMotifRejet(): ?string
    {
        return $this->motifRejet;
    }

    public function setMotifRejet(string $motifRejet): self
    {
        $this->motifRejet = $motifRejet;

        return $this;
    }

    public function getEtatRembousement(): ?string
    {
        return $this->etatRembousement;
    }

    public function setEtatRembousement(string $etatRembousement): self
    {
        $this->etatRembousement = $etatRembousement;

        return $this;
    }

    public function getDateFacture(): ?\DateTimeInterface
    {
        return $this->dateFacture;
    }

    public function setDateFacture(\DateTimeInterface $dateFacture): self
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    public function getPaiementEffectue(): ?bool
    {
        return $this->paiementEffectue;
    }

    public function setPaiementEffectue(bool $paiementEffectue): self
    {
        $this->paiementEffectue = $paiementEffectue;

        return $this;
    }

    public function getDemande(): ?Demande
    {
        return $this->demande;
    }

    public function setDemande(?Demande $demande): self
    {
        $this->demande = $demande;

        return $this;
    }

    public function getComptable(): ?Comptable
    {
        return $this->comptable;
    }

    public function setComptable(?Comptable $comptable): self
    {
        $this->comptable = $comptable;

        return $this;
    }

    public function __toString()
    {
        return "[".$this->getReference()." ".$this->getDatePaiement()->format("d/m/Y")."]";
    }

}
