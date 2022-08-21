<?php

namespace App\Entity;

use App\Repository\PointNonconfRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PointNonconfRepository::class)]
class PointNonconf
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numero;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[ORM\ManyToOne(targetEntity: PointVerification::class, inversedBy: 'PointNonconf')]
    private $pointVerification;

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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }


    public function getPointVerification(): ?PointVerification
    {
        return $this->pointVerification;
    }

    public function setPointVerification(?PointVerification $pt): self
    {
        $this->pointVerification = $pt;

        return $this;
    }

    public function __toString()
    {
        return "[".$this->getNumero()."]- ".$this->getLibelle();
    }
}
