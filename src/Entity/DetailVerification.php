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

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $conclusion;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $commentaire;

    #[ORM\ManyToOne(targetEntity: PointVerification::class)]
    private $pointVerification;

    #[ORM\ManyToOne(targetEntity: Visite::class)]
    private $visite;

    public function __construct()
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getConclusion(): ?bool
    {
        return $this->conclusion;
    }

    public function setConclusion(?bool $conclusion): self
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    public function getVisite(): ?Visite
    {
        return $this->visite;
    }

    public function setVisite(?Visite $visite): self
    {
        $this->visite = $visite;

        return $this;
    }


    public function getPointVerification(): ?PointVerification
    {
        return $this->pointVerification;
    }

    public function setPointVerification(?PointVerification $pointVerification): self
    {
        $this->pointVerification = $pointVerification;

        return $this;
    }


    public function __toString()
    {
        return "[Vérification".$this->getId()."]";
    }
}
