<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\InstallationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InstallationRepository::class)]
class Installation
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $etat;

    #[ORM\Column(type: 'string', length: 255)]
    private $compteurVoisin;

    #[ORM\Column(type: 'string', length: 255)]
    private $compteur;

    #[ORM\Column(type: 'string', length: 255)]
    private $abonnement;

    #[ORM\Column(type: 'string', length: 255)]
    private $bp;

    #[ORM\Column(type: 'string', length: 255)]
    private $adresse;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomSite;

    #[ORM\Column(type: 'string', length: 255)]
    private $lattitude;

    #[ORM\Column(type: 'string', length: 255)]
    private $longitude;

    #[ORM\Column(type: 'string', length: 255)]
    private $dateInstallation;

    #[ORM\Column(type: 'string', length: 255)]
    private $grstReseau;

    #[ORM\Column(type: 'string', length: 255)]
    private $neuf15;

    #[ORM\Column(type: 'string', length: 255)]
    private $existant15;

    #[ORM\Column(type: 'string', length: 255)]
    private $neuf25;

    #[ORM\Column(type: 'string', length: 255)]
    private $existant25;

    #[ORM\Column(type: 'string', length: 255)]
    private $neufAutre;

    #[ORM\Column(type: 'string', length: 255)]
    private $existantAutre;

    #[ORM\Column(type: 'string', length: 255)]
    private $titreProp;

    #[ORM\Column(type: 'string', length: 255)]
    private $intervenant;

    #[ORM\Column(type: 'string', length: 255)]
    private $intervenantAutre;

    #[ORM\Column(type: 'string', length: 255)]
    private $collectif;

    #[ORM\Column(type: 'string', length: 255)]
    private $logement;

    #[ORM\Column(type: 'string', length: 255)]
    private $priece;

    #[ORM\Column(type: 'string', length: 255)]
    private $puissance;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'installation')]
    private $client;

    #[ORM\ManyToOne(targetEntity: Localite::class, inversedBy: 'installation')]
    private $localite;

    #[ORM\ManyToOne(targetEntity: TypeConstruction::class, inversedBy: 'installation')]
    private $typeConstruction;

    #[ORM\ManyToOne(targetEntity: NatureBatiment::class, inversedBy: 'installation')]
    private $natureBatiment;

    #[ORM\ManyToOne(targetEntity: NatureTravaux::class, inversedBy: 'installation')]
    private $natureTravaux;

    #[ORM\OneToMany(mappedBy: 'installation', targetEntity: Demande::class)]
    private $demande;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->demande = new ArrayCollection();
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

    public function getCompteurVoisin(): ?string
    {
        return $this->compteurVoisin;
    }

    public function setCompteurVoisin(string $compteurVoisin): self
    {
        $this->compteurVoisin = $compteurVoisin;

        return $this;
    }

    public function getCompteur(): ?string
    {
        return $this->compteur;
    }

    public function setCompteur(string $compteur): self
    {
        $this->compteur = $compteur;

        return $this;
    }

    public function getAbonnement(): ?string
    {
        return $this->abonnement;
    }

    public function setAbonnement(string $abonnement): self
    {
        $this->abonnement = $abonnement;

        return $this;
    }

    public function getBp(): ?string
    {
        return $this->bp;
    }

    public function setBp(string $bp): self
    {
        $this->bp = $bp;

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

    public function getNomSite(): ?string
    {
        return $this->nomSite;
    }

    public function setNomSite(string $nomSite): self
    {
        $this->nomSite = $nomSite;

        return $this;
    }

    public function getLattitude(): ?string
    {
        return $this->lattitude;
    }

    public function setLattitude(string $lattitude): self
    {
        $this->lattitude = $lattitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getDateInstallation(): ?string
    {
        return $this->dateInstallation;
    }

    public function setDateInstallation(string $dateInstallation): self
    {
        $this->dateInstallation = $dateInstallation;

        return $this;
    }

    public function getGrstReseau(): ?string
    {
        return $this->grstReseau;
    }

    public function setGrstReseau(string $grstReseau): self
    {
        $this->grstReseau = $grstReseau;

        return $this;
    }

    public function getNeuf15(): ?string
    {
        return $this->neuf15;
    }

    public function setNeuf15(string $neuf15): self
    {
        $this->neuf15 = $neuf15;

        return $this;
    }

    public function getExistant15(): ?string
    {
        return $this->existant15;
    }

    public function setExistant15(string $existant15): self
    {
        $this->existant15 = $existant15;

        return $this;
    }

    public function getNeuf25(): ?string
    {
        return $this->neuf25;
    }

    public function setNeuf25(string $neuf25): self
    {
        $this->neuf25 = $neuf25;

        return $this;
    }

    public function getExistant25(): ?string
    {
        return $this->existant25;
    }

    public function setExistant25(string $existant25): self
    {
        $this->existant25 = $existant25;

        return $this;
    }

    public function getNeufAutre(): ?string
    {
        return $this->neufAutre;
    }

    public function setNeufAutre(string $neufAutre): self
    {
        $this->neufAutre = $neufAutre;

        return $this;
    }

    public function getExistantAutre(): ?string
    {
        return $this->existantAutre;
    }

    public function setExistantAutre(string $existantAutre): self
    {
        $this->existantAutre = $existantAutre;

        return $this;
    }

    public function getTitreProp(): ?string
    {
        return $this->titreProp;
    }

    public function setTitreProp(string $titreProp): self
    {
        $this->titreProp = $titreProp;

        return $this;
    }

    public function getIntervenant(): ?string
    {
        return $this->intervenant;
    }

    public function setIntervenant(string $intervenant): self
    {
        $this->intervenant = $intervenant;

        return $this;
    }

    public function getIntervenantAutre(): ?string
    {
        return $this->intervenantAutre;
    }

    public function setIntervenantAutre(string $intervenantAutre): self
    {
        $this->intervenantAutre = $intervenantAutre;

        return $this;
    }

    public function getCollectif(): ?string
    {
        return $this->collectif;
    }

    public function setCollectif(string $collectif): self
    {
        $this->collectif = $collectif;

        return $this;
    }

    public function getLogement(): ?string
    {
        return $this->logement;
    }

    public function setLogement(string $logement): self
    {
        $this->logement = $logement;

        return $this;
    }

    public function getPriece(): ?string
    {
        return $this->priece;
    }

    public function setPriece(string $priece): self
    {
        $this->priece = $priece;

        return $this;
    }

    public function getPuissance(): ?string
    {
        return $this->puissance;
    }

    public function setPuissance(string $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

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

    public function getTypeConstruction(): ?TypeConstruction
    {
        return $this->typeConstruction;
    }

    public function setTypeConstruction(?TypeConstruction $typeConstruction): self
    {
        $this->typeConstruction = $typeConstruction;

        return $this;
    }

    public function getNatureBatiment(): ?NatureBatiment
    {
        return $this->natureBatiment;
    }

    public function setNatureBatiment(?NatureBatiment $natureBatiment): self
    {
        $this->natureBatiment = $natureBatiment;

        return $this;
    }

    public function getNatureTravaux(): ?NatureTravaux
    {
        return $this->natureTravaux;
    }

    public function setNatureTravaux(?NatureTravaux $natureTravaux): self
    {
        $this->natureTravaux = $natureTravaux;

        return $this;
    }

    /**
     * @return Collection<int, Demande>
     */
    public function getDemande(): Collection
    {
        return $this->demande;
    }

    public function addDemande(Demande $demande): self
    {
        if (!$this->demande->contains($demande)) {
            $this->demande[] = $demande;
            $demande->setInstallation($this);
        }

        return $this;
    }

    public function removeDemande(Demande $demande): self
    {
        if ($this->demande->removeElement($demande)) {
            // set the owning side to null (unless already changed)
            if ($demande->getInstallation() === $this) {
                $demande->setInstallation(null);
            }
        }

        return $this;
    }

    
}
