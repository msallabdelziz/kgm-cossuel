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

    #[ORM\OneToMany(mappedBy: 'demande', targetEntity: PieceJointe::class)]
    private $pieceJointes;

    #[ORM\Column(type: 'integer', nullable:true)]
    private $demande_parente;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'demande')]
    private $utilisateur;

    #[ORM\ManyToOne(targetEntity: Installation::class, inversedBy: 'demande')]
    private $installation;

    public function __construct()
    {
        $this->numeroPassage = 1;
        $this->cout = 0;
        $this->numero = "";
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->dateCreation = new \DateTime();
        $this->etat = "Soumis";
        $this->pieceJointes = new ArrayCollection();
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

    public function getNumeroPassage(): ?int
    {
        return $this->numeroPassage;
    }

    public function setNumeroPassage(int $numeroPassage): self
    {
        $this->numeroPassage = $numeroPassage;

        return $this;
    }

    /**
     * @return Collection<int, PieceJointe>
     */
    public function getPieceJointes(): Collection
    {
        return $this->pieceJointes;
    }

    public function addPieceJointe(PieceJointe $pieceJointe): self
    {
        if (!$this->pieceJointes->contains($pieceJointe)) {
            $this->pieceJointes[] = $pieceJointe;
            $pieceJointe->setDemande($this);
        }

        return $this;
    }

    public function removePieceJointe(PieceJointe $pieceJointe): self
    {
        if ($this->pieceJointes->removeElement($pieceJointe)) {
            // set the owning side to null (unless already changed)
            if ($pieceJointe->getDemande() === $this) {
                $pieceJointe->setDemande(null);
            }
        }

        return $this;
    }

    
    public function getDemandeParente(): ?int
    {
        return $this->demande;
    }

    public function setDemande(?int $demande): self
    {
        $this->demande = $demande;

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
