<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\PaiementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
class Paiement
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $observation;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $datePaiement;

    #[ORM\Column(type: 'datetime')]
    private $dateSaisie;

    #[ORM\Column(type: 'string', length: 255)]
    private $mode;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $reference;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etatRembousement;

    #[ORM\Column(type: 'boolean')]
    private $paiementEffectue;

    #[ORM\OneToOne(targetEntity: Demande::class, cascade: ['persist', 'remove'])]
    private $demande;

    #[ORM\ManyToOne(targetEntity: Agent::class, inversedBy: 'paiement')]
    private $comptable;

    #[ORM\OneToMany(mappedBy: 'paiement', targetEntity: Remboursement::class)]
    private $remboursements;

    public function __construct()
    {
        $this->created_by = "";
        $this->dateSaisie = new \DateTime();
        $this->created_at = new \DateTimeImmutable();
        $this->paiementEffectue = false;
        $this->remboursements = new ArrayCollection();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

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

    public function getDateSaisie(): ?\DateTimeInterface
    {
        return $this->dateSaisie;
    }

    public function setDateSaisie(\DateTimeInterface $dateSaisie): self
    {
        $this->dateSaisie = $dateSaisie;

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

    public function getComptable(): ?Agent
    {
        return $this->comptable;
    }

    public function setComptable(?Agent $comptable): self
    {
        $this->comptable = $comptable;

        return $this;
    }

    public function getRemboursement(): ?Remboursement
    {
        $res=$this->remboursements;
        if($res->count()) {
            return $res[0];
        } else {
            return null;
        }
    }


    public function __toString()
    {
        return "[".$this->getReference()." ".$this->getDatePaiement()->format("d/m/Y")."]";
    }

    /**
     * @return Collection<int, Remboursement>
     */
    public function getRemboursements(): Collection
    {
        return $this->remboursements;
    }

    public function addRemboursement(Remboursement $remboursement): self
    {
        if (!$this->remboursements->contains($remboursement)) {
            $this->remboursements[] = $remboursement;
            $remboursement->setPaiement($this);
        }

        return $this;
    }

    public function removeRemboursement(Remboursement $remboursement): self
    {
        if ($this->remboursements->removeElement($remboursement)) {
            // set the owning side to null (unless already changed)
            if ($remboursement->getPaiement() === $this) {
                $remboursement->setPaiement(null);
            }
        }

        return $this;
    }

}
