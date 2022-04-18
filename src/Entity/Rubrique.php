<?php

namespace App\Entity;

use App\Repository\RubriqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RubriqueRepository::class)]
class Rubrique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[ORM\ManyToOne(targetEntity: Rapport::class, inversedBy: 'rubriques')]
    private $rapport;

    #[ORM\OneToMany(mappedBy: 'rubrique', targetEntity: DetailVerification::class)]
    private $detailVerifications;

    public function __construct()
    {
        $this->detailVerifications = new ArrayCollection();
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

    public function getRapport(): ?Rapport
    {
        return $this->rapport;
    }

    public function setRapport(?Rapport $rapport): self
    {
        $this->rapport = $rapport;

        return $this;
    }

    /**
     * @return Collection<int, DetailVerification>
     */
    public function getDetailVerifications(): Collection
    {
        return $this->detailVerifications;
    }

    public function addDetailVerification(DetailVerification $detailVerification): self
    {
        if (!$this->detailVerifications->contains($detailVerification)) {
            $this->detailVerifications[] = $detailVerification;
            $detailVerification->setRubrique($this);
        }

        return $this;
    }

    public function removeDetailVerification(DetailVerification $detailVerification): self
    {
        if ($this->detailVerifications->removeElement($detailVerification)) {
            // set the owning side to null (unless already changed)
            if ($detailVerification->getRubrique() === $this) {
                $detailVerification->setRubrique(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getLibelle();
    }

}
