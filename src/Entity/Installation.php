<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\InstallationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;

#[ORM\Entity(repositoryClass: InstallationRepository::class)]
class Installation
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $usage;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $etat;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $alimente;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $compteurVoisin;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $compteur;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $abonnement;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $bp;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $adresse;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $nomSite;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $lattitude;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $longitude;

    #[ORM\Column(type: 'datetime', nullable:true)]
    private $dateInstallation;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $grstReseau;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $neuf15;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $existant15;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $neuf25;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $existant25;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $neufAutre;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $existantAutre;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $titreProp;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $intervenant;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $intervenantAutre;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $collectif;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $logement;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $priece;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $puissance;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $activite;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $niveau;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $habitation;

    #[ORM\ManyToOne(targetEntity: Proprietaire::class, inversedBy: 'installation')]
    private $proprietaire;

    #[ORM\ManyToOne(targetEntity: Electricien::class, inversedBy: 'installation')]
    private $electricien;

    #[ORM\ManyToOne(targetEntity: Localite::class, inversedBy: 'installation')]
    // #[ORM\JoinColumn("NatureBatiment", "id", false, true)]
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

    public function getUsage(): ?string
    {
        return $this->usage;
    }

    public function setUsage(string $usage): self
    {
        $this->usage = $usage;

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

    public function getAlimente(): ?string
    {
        return $this->alimente;
    }

    public function setAlimente(string $alimente): self
    {
        $this->alimente = $alimente;

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

    public function getDateInstallation(): ?\DateTimeInterface
    {
        return $this->dateInstallation;
    }

    public function setDateInstallation(?\DateTimeInterface $dateInstallation): self
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

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getHabitation(): ?string
    {
        return $this->habitation;
    }

    public function setHabitation(string $habitation): self
    {
        $this->habitation = $habitation;

        return $this;
    }

    public function getProprietaire(): ?Proprietaire
    {
        return $this->proprietaire;
    }

    public function setProprietaire(?Proprietaire $proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getElectricien(): ?Electricien
    {
        return $this->electricien;
    }

    public function setElectricien(?Electricien $electricien): self
    {
        $this->electricien = $electricien;

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
