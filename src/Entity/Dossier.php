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

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $dateAffecte;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $dateCloture;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $affecte = false;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $visite = false;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $rapport = false;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $attestation = false;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $cloture;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $conforme;

    #[ORM\OneToOne(targetEntity: Demande::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $demande;

    #[ORM\OneToMany(mappedBy: 'dossier', targetEntity: Visite::class)]
    private $visites;

    #[ORM\ManyToOne(targetEntity: Agent::class, inversedBy: 'dossier')]
    private $respoFrontOffice;

    #[ORM\ManyToOne(targetEntity: Agent::class, inversedBy: 'dossier')]
    private $controleur;

    #[ORM\ManyToOne(targetEntity: Agent::class, inversedBy: 'dossier')]
    private $referent;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->affecte = false;
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

    public function getDateCloture(): ?\DateTimeInterface
    {
        return $this->dateCloture;
    }

    public function setDateCloture(\DateTimeInterface $dateCloture): self
    {
        $this->dateCloture = $dateCloture;

        return $this;
    }

    public function getDateAffecte(): ?\DateTimeInterface
    {
        return $this->dateAffecte;
    }

    public function setDateAffecte(?\DateTimeInterface $dateAffecte): self
    {
        $this->dateAffecte = $dateAffecte;

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

    public function getVisite(): ?bool
    {
        return $this->visite;
    }

    public function setVisite(bool $visite): self
    {
        $this->visite = $visite;

        return $this;
    }

    public function getRapport(): ?bool
    {
        return $this->rapport;
    }

    public function setRapport(bool $rapport): self
    {
        $this->rapport = $rapport;

        return $this;
    }

    public function getAttestation(): ?bool
    {
        return $this->attestation;
    }

    public function setAttestation(bool $attestation): self
    {
        $this->attestation = $attestation;

        return $this;
    }

    public function getCloture(): ?bool
    {
        return $this->cloture;
    }

    public function setCloture(bool $cloture): self
    {
        $this->cloture = $cloture;
        return $this;
    }

    public function getConforme(): ?bool
    {
        return $this->conforme;
    }

    public function setConforme(bool $conforme): self
    {
        $this->conforme = $conforme;
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

    public function getRespoFrontOffice(): ?Agent
    {
        return $this->respoFrontOffice;
    }

    public function setRespoFrontOffice(?Agent $respoFrontOffice): self
    {
        $this->respoFrontOffice = $respoFrontOffice;

        return $this;
    }

    public function getControleur(): ?Agent
    {
        return $this->controleur;
    }

    public function setControleur(?Agent $controleur): self
    {
        $this->controleur = $controleur;

        return $this;
    }

    public function getReferent(): ?Agent
    {
        return $this->referent;
    }

    public function setReferent(?Agent $referent): self
    {
        $this->referent = $referent;

        return $this;
    }

    public function getVisiteCourante(): ?Visite
    {
        $les_visite = $this->visites;
        if($les_visite->count()) {
            return $les_visite->last();
        } else {
            return null;
        }
    }


    public function getEtat(): ?string
    {
        $etat = "Affectation";
        if($this->affecte == true && $this->visite == false && $this->rapport == false && $this->attestation == false) {
            $etat = "Visite";
        } 
        elseif($this->affecte == true && $this->visite == true && $this->rapport == false && $this->attestation == false) {
            $etat = "Rapport";
        }
        elseif($this->affecte == true && $this->visite == true && $this->rapport == true && $this->attestation == false) {
            $etat = "Attestation";
        }
        elseif($this->affecte == true && $this->visite == true && $this->rapport == true && $this->attestation == true) {
            $etat = "Clôturé";
            $etat.=($this->getVisiteCourante()->getConclusion())?" - Conforme":" - Non Conforme";
        }
        return $etat;
    }

    public function __toString()
    {
        return "[".$this->getNum()." ".$this->getDateCreation()->format("d/m/Y")."]";
    }

}
