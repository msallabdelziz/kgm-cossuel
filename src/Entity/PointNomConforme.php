<?php

namespace App\Entity;

use App\Repository\PointNomConformeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PointNomConformeRepository::class)]
class PointNomConforme
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[ORM\ManyToOne(targetEntity: DetailVerification::class, inversedBy: 'pointNomConformes')]
    private $detailVerification;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDetailVerification(): ?DetailVerification
    {
        return $this->detailVerification;
    }

    public function setDetailVerification(?DetailVerification $detailVerification): self
    {
        $this->detailVerification = $detailVerification;

        return $this;
    }
}
