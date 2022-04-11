<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfilRepository::class)]
class Profil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\OneToMany(mappedBy: 'profil', targetEntity: Utilisateur::class)]
    private $utilisateur;

    #[ORM\OneToMany(mappedBy: 'profil', targetEntity: Droit::class)]
    private $droit;

    public function __construct()
    {
        $this->utilisateur = new ArrayCollection();
        $this->droit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getUtilisateur(): Collection
    {
        return $this->utilisateur;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->utilisateur->contains($utilisateur)) {
            $this->utilisateur[] = $utilisateur;
            $utilisateur->setProfil($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        if ($this->utilisateur->removeElement($utilisateur)) {
            // set the owning side to null (unless already changed)
            if ($utilisateur->getProfil() === $this) {
                $utilisateur->setProfil(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Droit>
     */
    public function getDroit(): Collection
    {
        return $this->droit;
    }

    public function addDroit(Droit $droit): self
    {
        if (!$this->droit->contains($droit)) {
            $this->droit[] = $droit;
            $droit->setProfil($this);
        }

        return $this;
    }

    public function removeDroit(Droit $droit): self
    {
        if ($this->droit->removeElement($droit)) {
            // set the owning side to null (unless already changed)
            if ($droit->getProfil() === $this) {
                $droit->setProfil(null);
            }
        }

        return $this;
    }
}
