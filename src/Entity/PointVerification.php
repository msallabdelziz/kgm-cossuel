<?php

namespace App\Entity;

use App\Repository\PointVerificationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PointVerificationRepository::class)]
class PointVerification
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
    private $libelleConclusion1 = "Conforme";

    #[ORM\Column(type: 'string', length: 255)]
    private $libelleConclusion2 = "Non Conforme";

    #[ORM\ManyToOne(targetEntity: Rubrique::class, inversedBy: 'pointVerifications')]
    private $rubrique;

    public function __construct()
    {

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

    public function getLibelleConclusion1(): ?string
    {
        return $this->libelleConclusion1;
    }

    public function setLibelleConclusion1(string $libelleConclusion1): self
    {
        $this->libelleConclusion1 = $libelleConclusion1;

        return $this;
    }

    public function getLibelleConclusion2(): ?string
    {
        return $this->libelleConclusion2;
    }

    public function setLibelleConclusion2(string $libelleConclusion2): self
    {
        $this->libelleConclusion2 = $libelleConclusion2;

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

    public function __toString()
    {
        return "[".$this->getNumero()."]";
    }
}
