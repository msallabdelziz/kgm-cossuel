<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Entity\Traits\slugTrait;
use App\Repository\AgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Security;

#[ORM\Entity(repositoryClass: AgenceRepository::class)]
class Agence
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $code;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $telephone;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $adresse;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Localite::class)]
    private $localite;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: AffectationsAgents::class)]
    private $affectation;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->affectation = new ArrayCollection();
        $this->localite = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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
            $localite->setAgence($this);
        }

        return $this;
    }

    public function removeLocalite(Localite $localite): self
    {
        if ($this->localite->removeElement($localite)) {
            // set the owning side to null (unless already changed)
            if ($localite->getAgence() === $this) {
                $localite->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AffectationsAgents>
     */
    public function getAffectation(): Collection
    {
        return $this->affectation;
    }

    public function addAffectation(AffectationsAgents $affectation): self
    {
        if (!$this->affectation->contains($affectation)) {
            $this->affectation[] = $affectation;
            $affectation->setAgence($this);
        }

        return $this;
    }

    public function removeAffectation(AffectationsAgents $affectation): self
    {
        if ($this->affectation->removeElement($affectation)) {
            // set the owning side to null (unless already changed)
            if ($affectation->getAgence() === $this) {
                $affectation->setAgence(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return "[".$this->getCode()."] ".$this->getNom();
    }
}
