<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\AttestationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttestationRepository::class)]
class Attestation
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numero;

    #[ORM\Column(type: 'datetime')]
    private $dateDelivrance;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $synchronise1;

    #[ORM\Column(type: 'datetime', nullable:true)]
    private $dateSynchro1;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $synchronise2;

    #[ORM\Column(type: 'datetime', nullable:true)]
    private $dateSynchro2;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $avis;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $dateAvis;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $compteur;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $contrat;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $dateContrat;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $comptabilisateur;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $finalisateur;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $agenceComptabilise;

    #[ORM\OneToOne(targetEntity: Dossier::class, cascade: ['persist', 'remove'])]
    private $dossier;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->synchronise1=0;
        $this->synchronise2=0;
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

    public function getDateDelivrance(): ?\DateTimeInterface
    {
        return $this->dateDelivrance;
    }

    public function setDateDelivrance(\DateTimeInterface $dateDelivrance): self
    {
        $this->dateDelivrance = $dateDelivrance;

        return $this;
    }

    public function getDossier(): ?Dossier
    {
        return $this->dossier;
    }

    public function setDossier(?Dossier $dossier): self
    {
        $this->dossier = $dossier;

        return $this;
    }

    public function getAgenceComptabilise(): ?string
    {
        return $this->agenceComptabilise;
    }

    public function setAgenceComptabilise(?string $val): self
    {
        $this->agenceComptabilise = $val;

        return $this;
    }

    public function getFinalisateur(): ?string
    {
        return $this->finalisateur;
    }

    public function setFinalisateur(?string $val): self
    {
        $this->finalisateur = $val;

        return $this;
    }

    public function getComptabilisateur(): ?string
    {
        return $this->comptabilisateur;
    }

    public function setComptabilisateur(?string $val): self
    {
        $this->comptabilisateur = $val;

        return $this;
    }

    public function getSynchronise1(): ?string
    {
        return $this->synchronise1;
    }

    public function setSynchronise1(?string $val): self
    {
        $this->synchronise1 = $val;

        return $this;
    }

    public function getSynchronise2(): ?string
    {
        return $this->synchronise2;
    }

    public function setSynchronise2(?string $val): self
    {
        $this->synchronise2 = $val;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(?string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }

    public function getDateAvis(): ?string
    {
        return $this->dateAvis;
    }

    public function setDateAvis(?string $dateAvis): self
    {
        $this->dateAvis = $dateAvis;

        return $this;
    }

    public function getCompteur(): ?string
    {
        return $this->compteur;
    }

    public function setCompteur(?string $compteur): self
    {
        $this->compteur = $compteur;

        return $this;
    }

    public function getContrat(): ?string
    {
        return $this->contrat;
    }

    public function setContrat(?string $Contrat): self
    {
        $this->contrat = $Contrat;

        return $this;
    }

    public function getDateContrat(): ?string
    {
        return $this->dateContrat;
    }

    public function setDateContrat(?string $Contrat): self
    {
        $this->dateContrat = $Contrat;

        return $this;
    }

    public function getDateSynchro1(): ?string
    {
        return $this->dateSynchro1;
    }

    public function setDateSynchro1(?string $val): self
    {
        $this->dateSynchro1 = $val;

        return $this;
    }

    public function getDateSynchro2(): ?string
    {
        return $this->dateSynchro2;
    }

    public function setDateSynchro2(?string $val): self
    {
        $this->dateSynchro2 = $val;

        return $this;
    }

    public function __toString()
    {
        return "[".$this->getNumero()." - ".$this->getDateDelivrance()->format("d/m/Y")."]";
    }

}
