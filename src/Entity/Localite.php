<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\LocaliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocaliteRepository::class)]
class Localite
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\ManyToOne(targetEntity: Departement::class, inversedBy: 'localite')]
    private $departement;

    #[ORM\ManyToOne(targetEntity: Agence::class, inversedBy: 'localite')]
    private $agence;

    #[ORM\OneToMany(mappedBy: 'localite', targetEntity: Electricien::class)]
    private $electricien;

    #[ORM\OneToMany(mappedBy: 'localite', targetEntity: Proprietaire::class)]
    private $proprietaire;

    #[ORM\OneToMany(mappedBy: 'localite', targetEntity: Installation::class)]
    private $installation;

    #[ORM\Column(type: 'string', length: 255)]
    private $code;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->electricien = new ArrayCollection();
        $this->proprietaire = new ArrayCollection();
        $this->installation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDepartement(): ?Departement
    {
        return $this->departement;
    }

    public function setDepartement(?Departement $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * @return Collection<int, Electricien>
     */
    public function getElectricien(): Collection
    {
        return $this->electricien;
    }

    public function addElectricien(Electricien $electricien): self
    {
        if (!$this->electricien->contains($electricien)) {
            $this->electricien[] = $electricien;
            $electricien->setLocalite($this);
        }

        return $this;
    }

    public function removeElectricien(Electricien $electricien): self
    {
        if ($this->electricien->removeElement($electricien)) {
            // set the owning side to null (unless already changed)
            if ($electricien->getLocalite() === $this) {
                $electricien->setLocalite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Proprietaire>
     */
    public function getProprietaire(): Collection
    {
        return $this->proprietaire;
    }

    public function addProprietaire(Proprietaire $proprietaire): self
    {
        if (!$this->proprietaire->contains($proprietaire)) {
            $this->electricien[] = $proprietaire;
            $proprietaire->setLocalite($this);
        }

        return $this;
    }

    public function removeProprietaire(Proprietaire $proprietaire): self
    {
        if ($this->proprietaire->removeElement($proprietaire)) {
            // set the owning side to null (unless already changed)
            if ($proprietaire->getLocalite() === $this) {
                $proprietaire->setLocalite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Installation>
     */
    public function getInstallation(): Collection
    {
        return $this->installation;
    }

    public function addInstallation(Installation $installation): self
    {
        if (!$this->installation->contains($installation)) {
            $this->installation[] = $installation;
            $installation->setLocalite($this);
        }

        return $this;
    }

    public function removeInstallation(Installation $installation): self
    {
        if ($this->installation->removeElement($installation)) {
            // set the owning side to null (unless already changed)
            if ($installation->getLocalite() === $this) {
                $installation->setLocalite(null);
            }
        }

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function __toString()
    {
        return "[".$this->getCode()."] ".$this->getNom();
    }

}
