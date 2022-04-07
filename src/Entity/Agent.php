<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;



/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VehiculeRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string") 
 * @ORM\DiscriminatorMap({"daf"="DAF", "controleur"="Controleur", "comptable"="Comptable", "caissier"="Caissier","respo_front_office"="RespoFrontOffice","referent"="Referent", "accueil"="Accueil"})
*/
 


#[ORM\Entity(repositoryClass: AgentRepository::class)]
class Agent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $matricule;

    #[ORM\Column(type: 'string', length: 255)]
    private $prenom;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $adresse;

    #[ORM\Column(type: 'string', length: 255)]
    private $telephone;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo;

    #[ORM\OneToMany(mappedBy: 'agent', targetEntity: AffectationsAgents::class)]
    private $affectation;

    public function __construct()
    {
        $this->affectation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
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

    public function setAdresse(string $adresse): self
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

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

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
            $affectation->setAgent($this);
        }

        return $this;
    }

    public function removeAffectation(AffectationsAgents $affectation): self
    {
        if ($this->affectation->removeElement($affectation)) {
            // set the owning side to null (unless already changed)
            if ($affectation->getAgent() === $this) {
                $affectation->setAgent(null);
            }
        }

        return $this;
    }
}
