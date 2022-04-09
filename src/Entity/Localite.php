<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Entity\Traits\slugTrait;
use App\Repository\LocaliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocaliteRepository::class)]
class Localite
{
    use createdAtTrait;
    use slugTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\ManyToOne(targetEntity: Departement::class, inversedBy: 'localite')]
    private $departement;

    #[ORM\OneToMany(mappedBy: 'localite', targetEntity: Agence::class)]
    private $agence;

    #[ORM\OneToMany(mappedBy: 'localite', targetEntity: Client::class)]
    private $client;

    #[ORM\OneToMany(mappedBy: 'localite', targetEntity: Installation::class)]
    private $installation;

    #[ORM\Column(type: 'string', length: 255)]
    private $code;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->agence = new ArrayCollection();
        $this->client = new ArrayCollection();
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

    /**
     * @return Collection<int, Agence>
     */
    public function getAgence(): Collection
    {
        return $this->agence;
    }

    public function addAgence(Agence $agence): self
    {
        if (!$this->agence->contains($agence)) {
            $this->agence[] = $agence;
            $agence->setLocalite($this);
        }

        return $this;
    }

    public function removeAgence(Agence $agence): self
    {
        if ($this->agence->removeElement($agence)) {
            // set the owning side to null (unless already changed)
            if ($agence->getLocalite() === $this) {
                $agence->setLocalite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Client>
     */
    public function getClient(): Collection
    {
        return $this->client;
    }

    public function addClient(Client $client): self
    {
        if (!$this->client->contains($client)) {
            $this->client[] = $client;
            $client->setLocalite($this);
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        if ($this->client->removeElement($client)) {
            // set the owning side to null (unless already changed)
            if ($client->getLocalite() === $this) {
                $client->setLocalite(null);
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
}
