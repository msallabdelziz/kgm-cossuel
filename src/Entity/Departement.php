<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\DepartementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartementRepository::class)]
class Departement
{
    use createdAtTrait;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\ManyToOne(targetEntity: Region::class, inversedBy: 'departement')]
    private $region;

    #[ORM\OneToMany(mappedBy: 'departement', targetEntity: Localite::class)]
    private $localite;

    #[ORM\Column(type: 'string', length: 255)]
    private $code;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->localite = new ArrayCollection();
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

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return Collection<int, Localite>
     */
    public function getLocalite(): Collection
    {
        return $this->localite;
    }

    public function addLocalite(Localite $localite): self
    {
        if (!$this->localite->contains($localite)) {
            $this->localite[] = $localite;
            $localite->setDepartement($this);
        }

        return $this;
    }

    public function removeLocalite(Localite $localite): self
    {
        if ($this->localite->removeElement($localite)) {
            // set the owning side to null (unless already changed)
            if ($localite->getDepartement() === $this) {
                $localite->setDepartement(null);
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
