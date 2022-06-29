<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\RemboursementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RemboursementRepository::class)]
class Remboursement
{

    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $dateDemande;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $dateValidation;

    #[ORM\Column(type: 'integer')]
    private $montant;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $motif;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $motifRejet;

    #[ORM\Column(type: 'boolean')]
    private $valide;

    #[ORM\Column(type: 'boolean')]
    private $rejete;

    #[ORM\ManyToOne(targetEntity: Paiement::class, inversedBy: 'remboursements')]
    #[ORM\JoinColumn(nullable: false)]
    private $paiement;

    public function __construct()
    {
        $this->valide = 0;
        $this->motifRejet = "";
        $this->rejete = 0;
        $this->motif = "";
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->date_demande = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

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

    public function getRejete(): ?bool
    {
        return $this->rejete;
    }

    public function setRejete(bool $rejet): self
    {
        $this->rejete = $rejet;

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
}
