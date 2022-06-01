<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\PieceJointeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PieceJointeRepository::class)]
class PieceJointe
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[ORM\Column(type: 'string', length: 255)]
    private $fichier;

    #[ORM\ManyToOne(targetEntity: Installation::class, inversedBy: 'pieceJointes')]
    private $installation;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
    }
    
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

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getInstallation(): ?Installation
    {
        return $this->installation;
    }

    public function setInstallation(?Installation $installation): self
    {
        $this->installation = $installation;
        return $this;
    }

    public function __toString()
    {
        return $this->getLibelle();
    }
}
