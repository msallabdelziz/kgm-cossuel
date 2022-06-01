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

    #[ORM\Column(type: 'integer')]
    private $numero;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[ORM\ManyToOne(targetEntity: Rapport::class, inversedBy: 'rubriques')]
    private $rapport;

    #[ORM\OneToMany(mappedBy: 'rubrique', targetEntity: PointVerification::class)]
    private $pointVerification;

    public function __construct()
    {
        $this->pointVerification = new ArrayCollection();
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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

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
     * @return Collection<int, PointVerification>
     */
    public function getPointVerification(): Collection
    {
        return $this->pointVerification;
    }

    public function addPointVerification(PointVerification $pointVerification): self
    {
        if (!$this->pointVerification->contains($pointVerification)) {
            $this->pointVerification[] = $pointVerification;
            $pointVerification->setRubrique($this);
        }

        return $this;
    }

    public function removePointVerification(PointVerification $pointVerification): self
    {
        if ($this->pointVerification->removeElement($pointVerification)) {
            // set the owning side to null (unless already changed)
            if ($pointVerification->getRubrique() === $this) {
                $pointVerification->setRubrique(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getLibelle();
    }

}
