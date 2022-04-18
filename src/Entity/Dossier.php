<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\DossierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DossierRepository::class)]
class Dossier
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $num;

    #[ORM\Column(type: 'datetime')]
    private $dateCreation;

    #[ORM\Column(type: 'datetime')]
    private $heureCreation;

    #[ORM\Column(type: 'datetime')]
    private $dateCloture;

    #[ORM\Column(type: 'boolean')]
    private $affecte;

    #[ORM\OneToOne(targetEntity: Demande::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $demande;

    #[ORM\OneToMany(mappedBy: 'dossier', targetEntity: Visite::class)]
    private $visites;

    #[ORM\ManyToOne(targetEntity: RespoFrontOffice::class, inversedBy: 'dossier')]
    private $respoFrontOffice;

    #[ORM\ManyToOne(targetEntity: Controleur::class, inversedBy: 'dossier')]
    private $controleur;

    #[ORM\ManyToOne(targetEntity: Referent::class, inversedBy: 'dossier')]
    private $referent;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->visites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

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

    public function getHeureCreation(): ?\DateTimeInterface
    {
        return $this->heureCreation;
    }

    public function setHeureCreation(\DateTimeInterface $heureCreation): self
    {
        $this->heureCreation = $heureCreation;

        return $this;
    }

    public function getDateCloture(): ?\DateTimeInterface
    {
        return $this->dateCloture;
    }

    public function setDateCloture(\DateTimeInterface $dateCloture): self
    {
        $this->dateCloture = $dateCloture;

        return $this;
    }

    public function getAffecte(): ?bool
    {
        return $this->affecte;
    }

    public function setAffecte(bool $affecte): self
    {
        $this->affecte = $affecte;

        return $this;
    }

    public function getDemande(): ?Demande
    {
        return $this->demande;
    }

    public function setDemande(Demande $demande): self
    {
        $this->demande = $demande;

        return $this;
    }

    /**
     * @return Collection<int, Visite>
     */
    public function getVisites(): Collection
    {
        return $this->visites;
    }

    public function addVisite(Visite $visite): self
    {
        if (!$this->visites->contains($visite)) {
            $this->visites[] = $visite;
            $visite->setDossier($this);
        }

        return $this;
    }

    public function removeVisite(Visite $visite): self
    {
        if ($this->visites->removeElement($visite)) {
            // set the owning side to null (unless already changed)
            if ($visite->getDossier() === $this) {
                $visite->setDossier(null);
            }
        }

        return $this;
    }

    public function getRespoFrontOffice(): ?RespoFrontOffice
    {
        return $this->respoFrontOffice;
    }

    public function setRespoFrontOffice(?RespoFrontOffice $respoFrontOffice): self
    {
        $this->respoFrontOffice = $respoFrontOffice;

        return $this;
    }

    public function getControleur(): ?Controleur
    {
        return $this->controleur;
    }

    public function setControleur(?Controleur $controleur): self
    {
        $this->controleur = $controleur;

        return $this;
    }

    public function getReferent(): ?Referent
    {
        return $this->referent;
    }

    public function setReferent(?Referent $referent): self
    {
        $this->referent = $referent;

        return $this;
    }


    public function __toString()
    {
        return "[".$this->getNum()." ".$this->getDateCreation()->format("d/m/Y")."]";
    }

}
