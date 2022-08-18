<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\AttestationConfRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttestationConfRepository::class)]
class AttestationConf
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $numero;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $usages;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dateDelivrance;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $electricien;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $telephoneE;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $emailE;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $numpieceE;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $adresseE;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $proprietaire;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $telephoneP;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $emailP;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $numpieceP;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $adresseP;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $localite;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $latitude;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $longitude;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $puissance;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $agence;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $referent;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $controleur;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $avis;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $dateAvis;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $compteur;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $contrat;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $dateContrat;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $synchronise1;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $dateSynchro1;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $synchronise2;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $dateSynchro2;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $comptabilise;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $finalise;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $comptabilisateur;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $finalisateur;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $agenceSynchronise;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $agenceComptabilise;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $agenceFinalise;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $demande;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $dossier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getAgenceSynchronise(): ?string
    {
        return $this->agenceSynchronise;
    }

    public function setAgenceSynchronise(?string $val): self
    {
        $this->agenceSynchronise = $val;

        return $this;
    }

    public function getAgenceFinalise(): ?string
    {
        return $this->agenceFinalise;
    }

    public function setAgenceFinalise(?string $val): self
    {
        $this->agenceFinalise = $val;

        return $this;
    }
    public function getAgenceComptabilise(): ?string
    {
        return $this->agenceComptabilise;
    }

    public function setAgenceComptabilise(?string $val): self
    {
        $this->agenceComptabilise = $val;

        return $this;
    }
    public function getFinalise(): ?string
    {
        return $this->finalise;
    }

    public function setFinalise(?string $val): self
    {
        $this->finalise = $val;

        return $this;
    }

    public function getComptabilise(): ?string
    {
        return $this->comptabilise;
    }

    public function setComptabilise(?string $val): self
    {
        $this->comptabilise = $val;

        return $this;
    }

    public function getFinalisateur(): ?string
    {
        return $this->finalisateur;
    }

    public function setFinalisateur(?string $val): self
    {
        $this->finalisateur = $val;

        return $this;
    }

    public function getComptabilisateur(): ?string
    {
        return $this->comptabilisateur;
    }

    public function setComptabilisateur(?string $val): self
    {
        $this->comptabilisateur = $val;

        return $this;
    }

    public function getSynchronise1(): ?string
    {
        return $this->synchronise1;
    }

    public function setSynchronise1(?string $val): self
    {
        $this->synchronise1 = $val;

        return $this;
    }

    public function getSynchronise2(): ?string
    {
        return $this->synchronise2;
    }

    public function setSynchronise2(?string $val): self
    {
        $this->synchronise2 = $val;

        return $this;
    }

    public function getDateSynchro1(): ?string
    {
        return $this->dateSynchro1;
    }

    public function setDateSynchro1(?string $val): self
    {
        $this->dateSynchro1 = $val;

        return $this;
    }

    public function getDateSynchro2(): ?string
    {
        return $this->dateSynchro2;
    }

    public function setDateSynchro2(?string $val): self
    {
        $this->dateSynchro2 = $val;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(?string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }

    public function getDateAvis(): ?string
    {
        return $this->dateAvis;
    }

    public function setDateAvis(?string $dateAvis): self
    {
        $this->dateAvis = $dateAvis;

        return $this;
    }

    public function getCompteur(): ?string
    {
        return $this->compteur;
    }

    public function setCompteur(?string $compteur): self
    {
        $this->compteur = $compteur;

        return $this;
    }

    public function getContrat(): ?string
    {
        return $this->contrat;
    }

    public function setContrat(?string $Contrat): self
    {
        $this->contrat = $Contrat;

        return $this;
    }

    public function getDateContrat(): ?string
    {
        return $this->dateContrat;
    }

    public function setDateContrat(?string $Contrat): self
    {
        $this->dateContrat = $Contrat;

        return $this;
    }

    public function getDateDelivrance(): ?string
    {
        return $this->dateDelivrance;
    }

    public function setDateDelivrance(?string $dateDelivrance): self
    {
        $this->dateDelivrance = $dateDelivrance;

        return $this;
    }

    public function getUsages(): ?string
    {
        return $this->usages;
    }

    public function setUsages(?string $usages): self
    {
        $this->usages = $usages;

        return $this;
    }

    public function getElectricien(): ?string
    {
        return $this->electricien;
    }

    public function setElectricien(?string $electricien): self
    {
        $this->electricien = $electricien;

        return $this;
    }

    public function getTelephoneE(): ?string
    {
        return $this->telephoneE;
    }

    public function setTelephoneE(?string $telephoneE): self
    {
        $this->telephoneE = $telephoneE;

        return $this;
    }

    public function getEmailE(): ?string
    {
        return $this->emailE;
    }

    public function setEmailE(?string $emailE): self
    {
        $this->emailE = $emailE;

        return $this;
    }

    public function getNumpieceE(): ?string
    {
        return $this->numpieceE;
    }

    public function setNumpieceE(?string $numpieceE): self
    {
        $this->numpieceE = $numpieceE;

        return $this;
    }

    public function getAdresseE(): ?string
    {
        return $this->adresseE;
    }

    public function setAdresseE(?string $adresseE): self
    {
        $this->adresseE = $adresseE;

        return $this;
    }

    public function getProprietaire(): ?string
    {
        return $this->proprietaire;
    }

    public function setProprietaire(?string $proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getTelephoneP(): ?string
    {
        return $this->telephoneP;
    }

    public function setTelephoneP(?string $telephoneP): self
    {
        $this->telephoneP = $telephoneP;

        return $this;
    }

    public function getEmailP(): ?string
    {
        return $this->emailP;
    }

    public function setEmailP(?string $emailP): self
    {
        $this->emailP = $emailP;

        return $this;
    }

    public function getNumpieceP(): ?string
    {
        return $this->numpieceP;
    }

    public function setNumpieceP(?string $numpieceP): self
    {
        $this->numpieceP = $numpieceP;

        return $this;
    }

    public function getAdresseP(): ?string
    {
        return $this->adresseP;
    }

    public function setAdresseP(?string $adresseP): self
    {
        $this->adresseP = $adresseP;

        return $this;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(?string $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getPuissance(): ?string
    {
        return $this->puissance;
    }

    public function setPuissance(?string $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getAgence(): ?string
    {
        return $this->agence;
    }

    public function setAgence(?string $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    public function getReferent(): ?string
    {
        return $this->referent;
    }

    public function setReferent(?string $referent): self
    {
        $this->referent = $referent;

        return $this;
    }

    public function getControleur(): ?string
    {
        return $this->controleur;
    }

    public function setControleur(?string $controleur): self
    {
        $this->controleur = $controleur;

        return $this;
    }

    public function getDemande(): ?string
    {
        return $this->demande;
    }

    public function setDemande(?string $val): self
    {
        $this->demande = $val;

        return $this;
    }

    public function getDossier(): ?string
    {
        return $this->dossier;
    }

    public function setDossier(?string $val): self
    {
        $this->dossier = $val;

        return $this;
    }

}
