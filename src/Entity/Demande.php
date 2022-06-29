<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\DemandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeRepository::class)]
class Demande
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $numero;

    #[ORM\Column(type: 'integer', nullable:true)]
    private $cout;

    #[ORM\Column(type: 'datetime')]
    private $dateCreation;

    #[ORM\Column(type: 'string', length: 255)]
    private $etat;

    #[ORM\Column(type: 'string', length: 255)]
    private $Puissance;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $TypeDemande;

    #[ORM\Column(type: 'datetime', nullable:true)]
    private $dateValidation;

    #[ORM\Column(type: 'integer')]
    private $numeroPassage;

    #[ORM\Column(type: 'integer', nullable:true)]
    private $demande_parente;

    #[ORM\Column(type: 'integer', nullable:true)]
    private $id_paiement;

    #[ORM\Column(type: 'boolean')]
    private $soumis;

    #[ORM\Column(type: 'boolean')]
    private $rejet;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $motifRejet;

    #[ORM\Column(type: 'datetime', nullable:true)]
    private $dateAcceptation;

    #[ORM\Column(type: 'boolean')]
    private $accepte;

    #[ORM\Column(type: 'boolean')]
    private $valide;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'demande')]
    private $utilisateur;

    #[ORM\ManyToOne(targetEntity: Installation::class, inversedBy: 'demande')]
    private $installation;

    #[ORM\OneToOne(targetEntity: Dossier::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: true)]
    private $dossier;

    #[ORM\OneToOne(targetEntity: Paiement::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: true)]
    private $paiement;

    public function __construct()
    {
        $this->numeroPassage = 1;
        $this->cout = 0;
        $this->numero = "";
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->dateCreation = new \DateTime();
        $this->soumis=true;
        $this->accepte=false;
        $this->valide=false;
        $this->rejet=false;
        $this->motifRejet="";
        $this->etat = "Soumis";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCout(): ?int
    {
        return $this->cout;
    }

    public function setCout(int $cout): self
    {
        $this->cout = $cout;

        return $this;
    }

    public function getDossier(): ?Dossier
    {
        return $this->dossier;
    }

    public function setDossier(Dossier $dossier): self
    {
        $this->dossier = $dossier;

        return $this;
    }

    public function getPaiement(): ?Paiement
    {
        return $this->paiement;
    }

    public function setPaiement(Paiement $paiement): self
    {
        $this->paiement = $paiement;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getPuissance(): ?string
    {
        return $this->Puissance;
    }

    public function setPuissance(string $Puissance): self
    {
        $this->Puissance = $Puissance;

        return $this;
    }

    public function getTypeDemande(): ?string
    {
        return $this->TypeDemande;
    }

    public function setTypeDemande(string $TypeDemande): self
    {
        $this->TypeDemande = $TypeDemande;

        return $this;
    }

    public function getDateValidation(): ?\DateTimeInterface
    {
        return $this->dateValidation;
    }

    public function setDateValidation(\DateTimeInterface $dateValidation): self
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    public function getDateAcceptation(): ?\DateTimeInterface
    {
        return $this->dateAcceptation;
    }

    public function setDateAcceptation(\DateTimeInterface $dateAcceptation): self
    {
        $this->dateValidation = $dateAcceptation;

        return $this;
    }

    public function getNumeroPassage(): ?int
    {
        return $this->numeroPassage;
    }

    public function setSoumis(bool $val): self
    {
        $this->soumis = $val;

        return $this;
    }
    public function getSoumis(): ?bool
    {
        return $this->soumis;
    }

    public function setRejet(bool $val): self
    {
        $this->rejet = $val;

        return $this;
    }
    public function getRejet(): ?bool
    {
        return $this->rejet;
    }

    public function getMotifRejet(): ?string
    {
        return $this->motifRejet;
    }

    public function setMotifRejet(?string $motifRejet): self
    {
        $this->motifRejet = $motifRejet;

        return $this;
    }

    public function setAccepte(bool $val): self
    {
        $this->accepte = $val;

        return $this;
    }
    public function getAccepte(): ?bool
    {
        return $this->accepte;
    }

    public function setValide(bool $val): self
    {
        $this->valide = $val;

        return $this;
    }
    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setNumeroPassage(int $numeroPassage): self
    {
        $this->numeroPassage = $numeroPassage;

        return $this;
    }
    
    public function getDemandeParente(): ?int
    {
        return $this->demande_parente;
    }

    public function setDemandeParente(?int $demande_parente): self
    {
        $this->demande_parente = $demande_parente;

        return $this;
    }

    public function getIdPaiement(): ?int
    {
        return $this->id_paiement;
    }

    public function setIdPaiement(?int $id_paiement): self
    {
        $this->id_paiement = $id_paiement;

        return $this;
    }


    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getInstallation(): ?Installation
    {
        return $this->installation;
    }

    public function setInstallation(?Installation $installation): self
    {
        $this->installation = $installation;

        return $this;
    }


    public function __toString()
    {
        return "[".$this->getNumero()." ".$this->getDateCreation()->format("d/m/Y")."]";
    }

}
