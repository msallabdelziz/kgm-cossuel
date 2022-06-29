<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\ProprietaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProprietaireRepository::class)]
class Proprietaire
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $prenom;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $adresse;

    #[ORM\Column(type: 'string', length: 255)]
    private $telephone;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $typePiece;

    #[ORM\Column(type: 'string', length: 255)]
    private $numPiece;

    #[ORM\Column(type: 'string', length: 255)]
    private $role;

    #[ORM\ManyToOne(targetEntity: Localite::class, inversedBy: 'proprietaire')]
    private $localite;

    #[ORM\OneToMany(mappedBy: 'proprietaire', targetEntity: Installation::class)]
    private $installation;

    public function __construct()
    {
        $this->created_by = "";
        $this->role = "ROLE_PUBLIC";
        $this->email = "";
        $this->adresse = "";
        $this->created_at = new \DateTimeImmutable();
        $this->installation = new ArrayCollection();
    }

    public function setFromUtilisateur(Utilisateur $utilisateur): self {
        $this->prenom = $utilisateur->getPrenom();
        $this->nom = $utilisateur->getNom();
        $this->adresse = $utilisateur->getAdresse();
        $this->email = $utilisateur->getEmail();
        $this->telephone = $utilisateur->getTelephone();
        $this->typePiece = ""; $this->numPiece = "";
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTypePiece(): ?string
    {
        return $this->typePiece;
    }

    public function setTypePiece(string $typePiece): self
    {
        $this->typePiece = $typePiece;

        return $this;
    }

    public function getNumPiece(): ?string
    {
        return $this->numPiece;
    }

    public function setNumPiece(string $numPiece): self
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getLocalite(): ?Localite
    {
        return $this->localite;
    }

    public function setLocalite(?Localite $localite): self
    {
        $this->localite = $localite;

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
            $installation->setProprietaire($this);
        }

        return $this;
    }

    public function removeInstallation(Installation $installation): self
    {
        if ($this->installation->removeElement($installation)) {
            // set the owning side to null (unless already changed)
            if ($installation->getProprietaire() === $this) {
                $installation->setProprietaire(null);
            }
        }

        return $this;
    }

    public function nomComplet()
    {
        return $this->getPrenom()." ".$this->getNom();
    }

    public function getNomComplet()
    {
        return $this->getPrenom()." ".$this->getNom();
    }

    public function __toString()
    {
        return "[".$this->getTelephone()."] ".$this->getPrenom()." ".$this->getNom();
    }

}
