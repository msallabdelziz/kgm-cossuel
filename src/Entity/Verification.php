<?php

namespace App\Entity;

use App\Repository\VerificationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VerificationRepository::class)]
class Verification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $etat;

    #[ORM\Column(type: 'string', length: 255)]
    private $commentaire;

    #[ORM\OneToMany(mappedBy: 'verification', targetEntity: DetailVerification::class)]
    private $detailVerification;

    #[ORM\ManyToOne(targetEntity: Visite::class, inversedBy: 'verication')]
    private $visite;

    public function __construct()
    {
        $this->detailVerification = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * @return Collection<int, DetailVerification>
     */
    public function getDetailVerification(): Collection
    {
        return $this->detailVerification;
    }

    public function addDetailVerification(DetailVerification $detailVerification): self
    {
        if (!$this->detailVerification->contains($detailVerification)) {
            $this->detailVerification[] = $detailVerification;
            $detailVerification->setVerification($this);
        }

        return $this;
    }

    public function removeDetailVerification(DetailVerification $detailVerification): self
    {
        if ($this->detailVerification->removeElement($detailVerification)) {
            // set the owning side to null (unless already changed)
            if ($detailVerification->getVerification() === $this) {
                $detailVerification->setVerification(null);
            }
        }

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
}
