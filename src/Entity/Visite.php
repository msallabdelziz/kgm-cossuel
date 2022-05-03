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

    #[ORM\Column(type: 'datetime')]
    private $dateVisite;

    #[ORM\Column(type: 'string', length: 255)]
    private $etat;

    #[ORM\OneToMany(mappedBy: 'visite', targetEntity: Verification::class)]
    private $verication;

    #[ORM\ManyToOne(targetEntity: Dossier::class, inversedBy: 'visites')]
    private $dossier;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->verication = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateVisite(): ?\DateTimeInterface
    {
        return $this->dateVisite;
    }

    public function setDateVisite(\DateTimeInterface $dateVisite): self
    {
        $this->dateVisite = $dateVisite;

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
     * @return Collection<int, Verification>
     */
    public function getVerication(): Collection
    {
        return $this->verication;
    }

    public function addVerication(Verification $verication): self
    {
        if (!$this->verication->contains($verication)) {
            $this->verication[] = $verication;
            $verication->setVisite($this);
        }

        return $this;
    }

    public function removeVerication(Verification $verication): self
    {
        if ($this->verication->removeElement($verication)) {
            // set the owning side to null (unless already changed)
            if ($verication->getVisite() === $this) {
                $verication->setVisite(null);
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

    public function __toString()
    {
        return "[".$this->getId()." ".$this->getDateVisite()->format("d-m-y")."]";
    }

}
