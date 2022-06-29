<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\VisiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VisiteRepository::class)]
class Visite
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $datePlanifie;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $dateRealise;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $dateRapporte;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $dateAtteste;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $planifie = false;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $realise = false;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $rapporte = false;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $atteste = false;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $conclusion = false;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $commentaire;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $commentaire2;

    #[ORM\OneToMany(mappedBy: 'visite', targetEntity: DetailVerification::class)]
    private $detailVerification;

    #[ORM\ManyToOne(targetEntity: Dossier::class, inversedBy: 'visites')]
    private $dossier;

    #[ORM\ManyToOne(targetEntity: Rapport::class)]
    private $rapport;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $motifRejetRapport;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $mesurePriseTerre="";

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $barrette="";

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $localNV="";

    #[ORM\Column(type: 'boolean')]
    private $rejetRapport = false;

    #[ORM\OneToMany(mappedBy: 'visite', targetEntity: Signature::class)]
    private $signatures;

    public function __construct()
    {
        $this->created_by = "";
        $this->rejetRapport = false;
        $this->motifRejetRapport = "";
        $this->mesurePriseTerre = "0";
        $this->created_at = new \DateTimeImmutable();
        $this->detailVerification = new ArrayCollection();
        $this->signatures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePlanifie(): ?\DateTimeInterface
    {
        return $this->datePlanifie;
    }

    public function setDatePlanifie(\DateTimeInterface $datePlanifie): self
    {
        $this->datePlanifie = $datePlanifie;
        return $this;
    }

    public function getDateRapporte(): ?\DateTimeInterface
    {
        return $this->dateRapporte;
    }

    public function setDateRapporte(?\DateTimeInterface $dateRapporte): self
    {
        $this->dateRapporte = $dateRapporte;
        return $this;
    }

    public function getDateAtteste(): ?\DateTimeInterface
    {
        return $this->dateAtteste;
    }

    public function setDateAtteste(\DateTimeInterface $dateAtteste): self
    {
        $this->dateAtteste = $dateAtteste;
        return $this;
    }

    public function getDateRealise(): ?\DateTimeInterface
    {
        return $this->dateRealise;
    }

    public function setDateRealise(\DateTimeInterface $dateRealise): self
    {
        $this->dateRealise = $dateRealise;
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

    /**
     * @return Collection<int, DetailVerification>
     */
    public function getDetailVerification(): Collection
    {
        return $this->detailVerification;
    }

    public function addDetailVerification(DetailVerification $detailVerification): self
    {
        if (!$this->detailVerification->contains($detailVerification)) {
            $this->detailVerification[] = $detailVerification;
            $detailVerification->setVisite($this);
        }

        return $this;
    }

    public function removeDetailVerification(DetailVerification $detailVerification): self
    {
        if ($this->detailVerication->removeElement($detailVerification)) {
            // set the owning side to null (unless already changed)
            if ($detailVerification->getVisite() === $this) {
                $detailVerification->setVisite(null);
            }
        }

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

    public function getRapport(): ?Rapport
    {
        return $this->rapport;
    }

    public function setRapport(?Rapport $rapport): self
    {
        $this->rapport = $rapport;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getCommentaire2(): ?string
    {
        return $this->commentaire2;
    }

    public function setCommentaire2(?string $commentaire2): self
    {
        $this->commentaire2 = $commentaire2;

        return $this;
    }

    public function getPlanifie(): ?bool
    {
        return $this->planifie;
    }

    public function setPlanifie(bool $planifie): self
    {
        $this->planifie = $planifie;

        return $this;
    }

    public function getConclusion(): ?bool
    {
        return $this->conclusion;
    }

    public function setConclusion(bool $conclusion): self
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    public function getRealise(): ?bool
    {
        return $this->realise;
    }

    public function setRealise(bool $realise): self
    {
        $this->realise = $realise;

        return $this;
    }

    public function getRapporte(): ?bool
    {
        return $this->rapporte;
    }

    public function setRapporte(bool $rapporte): self
    {
        $this->rapporte = $rapporte;

        return $this;
    }

    public function getAtteste(): ?bool
    {
        return $this->atteste;
    }

    public function setAtteste(bool $atteste): self
    {
        $this->atteste = $atteste;

        return $this;
    }

    public function getRejetRapport(): ?bool
    {
        return $this->rejetRapport;
    }

    public function setRejetRapport(bool $rejetRapport): self
    {
        $this->rejetRapport = $rejetRapport;

        return $this;
    }

    public function getMotifRejetRapport(): ?string
    {
        return $this->motifRejetRapport;
    }

    public function setMotifRejetRapport(?string $motifRejetRapport): self
    {
        $this->motifRejetRapport = $motifRejetRapport;

        return $this;
    }

    public function getMesurePriseTerre(): ?string
    {
        return $this->mesurePriseTerre;
    }

    public function setMesurePriseTerre(?string $mesurePriseTerre): self
    {
        $this->mesurePriseTerre = $mesurePriseTerre;

        return $this;
    }

    public function getBarrette(): ?string
    {
        return $this->barrette;
    }

    public function setBarrette(?string $barrette): self
    {
        $this->barrette = $barrette;

        return $this;
    }

    public function getLocalNV(): ?string
    {
        return $this->localNV;
    }

    public function setLocalNV(?string $localNV): self
    {
        $this->localNV = $localNV;

        return $this;
    }

    /**
     * @return Collection<int, Signature>
     */
    public function getSignatures(): Collection
    {
        return $this->signatures;
    }

    public function addSignature(Signature $signature): self
    {
        if (!$this->signatures->contains($signature)) {
            $this->signatures[] = $signature;
            $signature->setVisite($this);
        }

        return $this;
    }

    public function removeSignature(Signature $signature): self
    {
        if ($this->signatures->removeElement($signature)) {
            // set the owning side to null (unless already changed)
            if ($signature->getVisite() === $this) {
                $signature->setVisite(null);
            }
        }

        return $this;
    }
    
    public function getSignelectricien(): ?Signature
    {
        $les_pj = $this->signatures;
        $res= null;
        if($les_pj->count()) {
            foreach ($les_pj as $pj) {
                if($pj->getLibelle() == "Signature Electricien") {
                    $res=$pj; break;
                }
            }
        } 
        return $res;
    }

    public function getSigncontroleur(): ?Signature
    {
        $les_pj = $this->signatures;
        $res= null;
        if($les_pj->count()) {
            foreach ($les_pj as $pj) {
                if($pj->getLibelle() == "Signature Controleur") {
                    $res=$pj; break;
                }
            }
        } 
        return $res;
    }

    public function __toString()
    {
        return "[".$this->getId()." ".$this->getDatePlanifie()->format("d-m-y")."]";
    }

}
