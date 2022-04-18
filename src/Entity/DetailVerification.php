<?php

namespace App\Entity;

use App\Repository\DetailVerificationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailVerificationRepository::class)]
class DetailVerification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numero;

    #[ORM\Column(type: 'string', length: 255)]
    private $objetVerification;

    #[ORM\Column(type: 'string', length: 255)]
    private $natureConclusion;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelleConclusion;

    #[ORM\ManyToOne(targetEntity: Rubrique::class, inversedBy: 'detailVerifications')]
    private $rubrique;

    #[ORM\OneToMany(mappedBy: 'detailVerification', targetEntity: PointNomConforme::class)]
    private $pointNomConformes;

    #[ORM\ManyToOne(targetEntity: Verification::class, inversedBy: 'detailVerification')]
    private $verification;

    public function __construct()
    {
        $this->pointNomConformes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getObjetVerification(): ?string
    {
        return $this->objetVerification;
    }

    public function setObjetVerification(string $objetVerification): self
    {
        $this->objetVerification = $objetVerification;

        return $this;
    }

    public function getNatureConclusion(): ?string
    {
        return $this->natureConclusion;
    }

    public function setNatureConclusion(string $natureConclusion): self
    {
        $this->natureConclusion = $natureConclusion;

        return $this;
    }

    public function getLibelleConclusion(): ?string
    {
        return $this->libelleConclusion;
    }

    public function setLibelleConclusion(string $libelleConclusion): self
    {
        $this->libelleConclusion = $libelleConclusion;

        return $this;
    }

    public function getRubrique(): ?Rubrique
    {
        return $this->rubrique;
    }

    public function setRubrique(?Rubrique $rubrique): self
    {
        $this->rubrique = $rubrique;

        return $this;
    }

    /**
     * @return Collection<int, PointNomConforme>
     */
    public function getPointNomConformes(): Collection
    {
        return $this->pointNomConformes;
    }

    public function addPointNomConforme(PointNomConforme $pointNomConforme): self
    {
        if (!$this->pointNomConformes->contains($pointNomConforme)) {
            $this->pointNomConformes[] = $pointNomConforme;
            $pointNomConforme->setDetailVerification($this);
        }

        return $this;
    }

    public function removePointNomConforme(PointNomConforme $pointNomConforme): self
    {
        if ($this->pointNomConformes->removeElement($pointNomConforme)) {
            // set the owning side to null (unless already changed)
            if ($pointNomConforme->getDetailVerification() === $this) {
                $pointNomConforme->setDetailVerification(null);
            }
        }

        return $this;
    }

    public function getVerification(): ?Verification
    {
        return $this->verification;
    }

    public function setVerification(?Verification $verification): self
    {
        $this->verification = $verification;

        return $this;
    }


    public function __toString()
    {
        return "[".$this->getNumero()."]";
    }
}
