<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\InstallationRepository;
use App\Repository\UtilisateurRepository;
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
    private $usages;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $etat;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $alimente;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $compteur;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $abonnement;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $adresse;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $typeInstallation;

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
    private $activite;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $niveau;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $habitation;

    #[ORM\Column(type: 'integer')]
    private $step;

    #[ORM\OneToMany(mappedBy: 'installation', targetEntity: PieceJointe::class)]
    private $pieceJointes;

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
        $this->step = 1;
        $this->etat = "Saisie 1/6";
        $this->created_at = new \DateTimeImmutable();
        $this->demande = new ArrayCollection();
        $this->pieceJointes = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function restId(): self
    {
       $this->id=null;
       return $this;
    }

    public function restDemande(): self
    {
       $this->demande=null;
       $this->demande = new ArrayCollection();
       return $this;
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

    public function getUsages(): ?string
    {
        return $this->usages;
    }

    public function setUsages(string $usages): self
    {
        $this->usages = $usages;

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

    public function getStep(): ?int
    {
        return $this->step;
    }

    public function setStep(int $step): self
    {
        $this->step = $step;

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

    public function getTypeInstallation(): ?string
    {
        return $this->typeInstallation;
    }

    public function setTypeInstallation(?string $typeInstallation): self
    {
        $this->typeInstallation = $typeInstallation;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(?string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(?string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getHabitation(): ?string
    {
        return $this->habitation;
    }

    public function setHabitation(?string $habitation): self
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

    public function getDemandeCourante(): ?Demande
    {
        $les_demande = $this->demande;
        if($les_demande->count()) {
            return $les_demande->last();
        } else {
            return null;
        }
    }

    public function getPJPhoto1(): ?PieceJointe
    {
        $les_pj = $this->pieceJointes;
        $res= null;
        if($les_pj->count()) {
            foreach ($les_pj as $pj) {
                if($pj->getLibelle() == "Photo Installation 1") {
                    $res=$pj; break;
                }
            }
        } 
        return $res;
    }

    public function getPJPhoto2(): ?PieceJointe
    {
        $les_pj = $this->pieceJointes;
        $res= null;
        if($les_pj->count()) {
            foreach ($les_pj as $pj) {
                if($pj->getLibelle() == "Photo Installation 2") {
                    $res=$pj; break;
                }
            }
        } 
        return $res;
    }

    public function getPJPhoto3(): ?PieceJointe
    {
        $les_pj = $this->pieceJointes;
        $res= null;
        if($les_pj->count()) {
            foreach ($les_pj as $pj) {
                if($pj->getLibelle() == "Photo Installation 3") {
                    $res=$pj; break;
                }
            }
        } 
        return $res;
    }

    public function getPJPhoto4(): ?PieceJointe
    {
        $les_pj = $this->pieceJointes;
        $res= null;
        if($les_pj->count()) {
            foreach ($les_pj as $pj) {
                if($pj->getLibelle() == "Photo Installation 4") {
                    $res=$pj; break;
                }
            }
        } 
        return $res;
    }


    public function getPJElectricien(): ?PieceJointe
    {
        $les_pj = $this->pieceJointes;
        $res= null;
        if($les_pj->count()) {
            foreach ($les_pj as $pj) {
                if($pj->getLibelle() == "PJ Electricien") {
                    $res=$pj; break;
                }
            }
        } 
        return $res;
    }

    public function getPJProprietaire(): ?PieceJointe
    {
        $les_pj = $this->pieceJointes;
        $res= null;
        if($les_pj->count()) {
            foreach ($les_pj as $pj) {
                if($pj->getLibelle() == "PJ Propriétaire") {
                    $res=$pj; break;
                }
            }
        } 
        return $res;
    }

    public function getPJDossierTechnique(): ?PieceJointe
    {
        $les_pj = $this->pieceJointes;
        $res= null;
        if($les_pj->count()) {
            foreach ($les_pj as $pj) {
                if($pj->getLibelle() == "PJ Dossier Technique") {
                    $res=$pj; break;
                }
            }
        } 
        return $res;
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

    /**
     * @return Collection<int, PieceJointe>
     */
    public function getPieceJointes(): Collection
    {
        return $this->pieceJointes;
    }

    public function addPieceJointe(PieceJointe $pieceJointe): self
    {
        if (!$this->pieceJointes->contains($pieceJointe)) {
            $this->pieceJointes[] = $pieceJointe;
            $pieceJointe->setInstallation($this);
        }

        return $this;
    }

    public function removePieceJointe(PieceJointe $pieceJointe): self
    {
        if ($this->pieceJointes->removeElement($pieceJointe)) {
            // set the owning side to null (unless already changed)
            if ($pieceJointe->getInstallation() === $this) {
                $pieceJointe->setInstallation(null);
            }
        }

        return $this;
    }
    
    public function getAgence(): ?Agence
    {
        $res = null;
        if($this->localite) {
            $res = $this->localite->getAgence();
        }
        return $res;
    }


}
