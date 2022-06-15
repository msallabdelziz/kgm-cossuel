<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Entity\Traits\slugTrait;
use App\Repository\AgentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: AgentRepository::class)]
/**
 * @ORM\Entity
 * @UniqueEntity("email")
 * @UniqueEntity("matricule")
 */
class Agent
{
    use createdAtTrait;

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

    #[ORM\Column(type: 'string', length: 255, unique:true)]
    private $email;

    #[ORM\Column(type: 'string', length: 255, nullable:true)]
    private $photo;

    #[ORM\Column(type: 'integer', nullable:true)]
    private $id_agence;

    #[ORM\ManyToOne(targetEntity: Profil::class, inversedBy: 'agent')]
    private $profil;

    #[ORM\OneToMany(mappedBy: 'caissier', targetEntity: Recu::class)]
    private $recu;

    #[ORM\OneToMany(mappedBy: 'comptable', targetEntity: Paiement::class)]
    private $paiement;

    #[ORM\OneToMany(mappedBy: 'controleur', targetEntity: Dossier::class)]
    private $dossierControleur;

    #[ORM\OneToMany(mappedBy: 'referent', targetEntity: Dossier::class)]
    private $dossierReferent;

    #[ORM\OneToMany(mappedBy: 'respoFrontOffice', targetEntity: Dossier::class)]
    private $dossierRFO;

    #[ORM\OneToMany(mappedBy: 'agent', targetEntity: AffectationsAgents::class)]
    private $affectation;

    /**
     * @var File
     */
    private $tof;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->affectation = new ArrayCollection();
        $this->recu = new ArrayCollection();
        $this->paiement = new ArrayCollection();
        $this->dossierReferent = new ArrayCollection();
        $this->dossierControleur = new ArrayCollection();
        $this->dossierRFO = new ArrayCollection();
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

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getIdAgence(): ?int
    {
        return $this->id_agence;
    }

    public function setIdAgence(? int $id_agence): self
    {
        $this->id_agence = $id_agence;

        return $this;
    }


    /**
     * @return File/null
     */

    public function getTof(): ?string
    {
        return $this->tof;
    }

    /**
     * @param File $tof
     */

    public function setTof(File $tof): self
    {
        $this->tof = $tof;

        return $this;
    }
    /**
     * @return Collection<int, AffectationsAgents>
     */
    public function getAffectation(): Collection
    {
        return $this->affectation;
    }

    public function getAgence(): ? Agence
    {
        if($this->affectation->count()>0) {
            return $this->affectation->last()->getAgence();
        }
        return null;
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

    /**
     * @return Collection<int, Recu>
     */
    public function getRecu(): Collection
    {
        return $this->recu;
    }

    public function addRecu(Recu $recu): self
    {
        if (!$this->recu->contains($recu)) {
            $this->recu[] = $recu;
            $recu->setCaissier($this);
        }

        return $this;
    }

    public function removeRecu(Recu $recu): self
    {
        if ($this->recu->removeElement($recu)) {
            // set the owning side to null (unless already changed)
            if ($recu->getCaissier() === $this) {
                $recu->setCaissier(null);
            }
        }

        return $this;
    }
    
    /**
     * @return Collection<int, Paiement>
     */
    public function getPaiement(): Collection
    {
        return $this->paiement;
    }

    public function addPaiement(Paiement $paiement): self
    {
        if (!$this->paiement->contains($paiement)) {
            $this->paiement[] = $paiement;
            $paiement->setComptable($this);
        }

        return $this;
    }

    public function removePaiement(Paiement $paiement): self
    {
        if ($this->paiement->removeElement($paiement)) {
            // set the owning side to null (unless already changed)
            if ($paiement->getComptable() === $this) {
                $paiement->setComptable(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Dossier>
     */
    public function getDossierActifReferent(): Collection
    {
        $les_dossier=new ArrayCollection();
        foreach($this->dossierReferent as $doss) {
            if(!$doss->getAttestation()) {
                $les_dossier->add($doss);
            }
        }
        return $les_dossier;
    }

    /**
     * @return Collection<int, Dossier>
     */
    public function getDossierReferent(): Collection
    {
        return $this->dossierReferent;
    }

    public function addDossierReferent(Dossier $dossier): self
    {
        if (!$this->dossierReferent->contains($dossier)) {
            $this->dossierReferent[] = $dossier;
            $dossier->setReferent($this);
        }

        return $this;
    }

    public function removeDossierReferent(Dossier $dossier): self
    {
        if ($this->dossierReferent->removeElement($dossier)) {
            // set the owning side to null (unless already changed)
            if ($dossier->getReferent() === $this) {
                $dossier->setReferent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Dossier>
     */
    public function getDossierControleur(): Collection
    {
        return $this->dossierControleur;
    }

    /**
     * @return Collection<int, Dossier>
     */
    public function getDossierActifControleur(): Collection
    {
        $les_dossier=new ArrayCollection();
        foreach($this->dossierControleur as $doss) {
            if(!$doss->getAttestation()) {
                $les_dossier->add($doss);
            }
        }
        return $les_dossier;
    }

    public function addDossierControleur(Dossier $dossier): self
    {
        if (!$this->dossierControleur->contains($dossier)) {
            $this->dossierControleur[] = $dossier;
            $dossier->setControleur($this);
        }

        return $this;
    }

    public function removeDossierControleur(Dossier $dossier): self
    {
        if ($this->dossierControleur->removeElement($dossier)) {
            // set the owning side to null (unless already changed)
            if ($dossier->getControleur() === $this) {
                $dossier->setControleur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Dossier>
     */
    public function getDossierRFO(): Collection
    {
        return $this->dossierRFO;
    }

    /**
     * @return Collection<int, Dossier>
     */
    public function getDossierActifRFO(): Collection
    {
        $les_dossier=new ArrayCollection();
        foreach($this->dossierRFO as $doss) {
            if(!$doss->getAttestation()) {
                $les_dossier->add($doss);
            }
        }
        return $les_dossier;
    }

    public function addDossierRFO(Dossier $dossier): self
    {
        if (!$this->dossierRFO->contains($dossier)) {
            $this->dossierRFO[] = $dossier;
            $dossier->setRespoFrontOffice($this);
        }

        return $this;
    }

    public function removeDossierRFO(Dossier $dossier): self
    {
        if ($this->dossierRFO->removeElement($dossier)) {
            // set the owning side to null (unless already changed)
            if ($dossier->getRespoFrontOffice() === $this) {
                $dossier->setRespoFrontOffice(null);
            }
        }

        return $this;
    }

    public function getAgenceCourante(): ?Agence
    {
        $les_aff = $this->affectation;
        if($les_aff->count()) {
            $aff=$les_aff->last();
            return $aff->getAgence();
        } else {
            return null;
        }
    }


    public function nomComplet()
    {
        return $this->getPrenom()." ".$this->getNom();
    }

    public function __toString()
    {
        return "[".$this->getMatricule()."] ".$this->getPrenom()." ".$this->getNom();
    }

}
