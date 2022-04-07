<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $login;

    #[ORM\Column(type: 'string', length: 255)]
    private $mdp;

    #[ORM\OneToOne(targetEntity: Agent::class, cascade: ['persist', 'remove'])]
    private $agent;

    #[ORM\ManyToOne(targetEntity: Profil::class, inversedBy: 'utilisateur')]
    private $profil;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Demande::class)]
    private $demande;

    public function __construct()
    {
        $this->demande = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getAgent(): ?Agent
    {
        return $this->agent;
    }

    public function setAgent(?Agent $agent): self
    {
        $this->agent = $agent;

        return $this;
    }

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * @return Collection<int, Demande>
     */
    public function getDemande(): Collection
    {
        return $this->demande;
    }

    public function addDemande(Demande $demande): self
    {
        if (!$this->demande->contains($demande)) {
            $this->demande[] = $demande;
            $demande->setUtilisateur($this);
        }

        return $this;
    }

    public function removeDemande(Demande $demande): self
    {
        if ($this->demande->removeElement($demande)) {
            // set the owning side to null (unless already changed)
            if ($demande->getUtilisateur() === $this) {
                $demande->setUtilisateur(null);
            }
        }

        return $this;
    }
}
