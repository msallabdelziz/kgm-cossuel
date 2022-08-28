<?php

namespace App\Entity;

use App\Entity\Traits\createdAtTrait;
use App\Repository\RapportRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RapportRepository::class)]
class Rapport
{
    use createdAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[ORM\OneToMany(mappedBy: 'rapport', targetEntity: Rubrique::class)]
    private $rubriques;

    public function __construct()
    {
        $this->created_by = "";
        $this->created_at = new \DateTimeImmutable();
        $this->rubriques = new ArrayCollection();
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

    /**
     * @return Collection<int, PointVerification>
     */
    public function getPointVerification(): Collection
    {
        $les_rub = $this->rubriques;
        $les_pt = new ArrayCollection();
        foreach ($les_rub as $rub) {
            foreach ($rub->getPointVerification() as $pt) {
                $les_pt->add($pt);
            }
        }
        return $les_pt;
    }

    /**
     * @return Collection<int, Rubrique>
     */
    public function getRubriques(): Collection
    {
        return $this->rubriques;
    }

    public function addRubrique(Rubrique $rubrique): self
    {
        if (!$this->rubriques->contains($rubrique)) {
            $this->rubriques[] = $rubrique;
            $rubrique->setRapport($this);
        }

        return $this;
    }

    public function removeRubrique(Rubrique $rubrique): self
    {
        if ($this->rubriques->removeElement($rubrique)) {
            // set the owning side to null (unless already changed)
            if ($rubrique->getRapport() === $this) {
                $rubrique->setRapport(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getLibelle();
    }

}
