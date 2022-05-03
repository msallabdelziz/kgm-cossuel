<?php

namespace App\Entity;

use App\Repository\CaissierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaissierRepository::class)]
class Caissier extends Agent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\OneToMany(mappedBy: 'caissier', targetEntity: Recu::class)]
    private $recu;

    public function __construct()
    {
        parent::__construct();
        $this->recu = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Recu>
     */
    public function getRecu(): Collection
    {
        return $this->recu;
    }

    public function addRecu(Recu $recu): self
    {
        if (!$this->recu->contains($recu)) {
            $this->recu[] = $recu;
            $recu->setCaissier($this);
        }

        return $this;
    }

    public function removeRecu(Recu $recu): self
    {
        if ($this->recu->removeElement($recu)) {
            // set the owning side to null (unless already changed)
            if ($recu->getCaissier() === $this) {
                $recu->setCaissier(null);
            }
        }

        return $this;
    }
}
