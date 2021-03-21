<?php

namespace App\Entity;

use App\Repository\EtapeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtapeRepository::class)
 */
class Etape
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gesteConcerne;

    /**
     * @ORM\ManyToOne(targetEntity=Apprentissage::class, inversedBy="etape")
     */
    private $apprentissage;

    /**
     * @ORM\Column(type="text")
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Educatif::class, mappedBy="etape")
     */
    private $educatifs;

    public function __construct()
    {
        $this->educatifs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGesteConcerne(): ?string
    {
        return $this->gesteConcerne;
    }

    public function setGesteConcerne(string $gesteConcerne): self
    {
        $this->gesteConcerne = $gesteConcerne;

        return $this;
    }

    public function getApprentissage(): ?Apprentissage
    {
        return $this->apprentissage;
    }

    public function setApprentissage(?Apprentissage $apprentissage): self
    {
        $this->apprentissage = $apprentissage;

        return $this;
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
     * @return Collection|Educatif[]
     */
    public function getEducatifs(): Collection
    {
        return $this->educatifs;
    }

    public function addEducatif(Educatif $educatif): self
    {
        if (!$this->educatifs->contains($educatif)) {
            $this->educatifs[] = $educatif;
            $educatif->setEtape($this);
        }

        return $this;
    }

    public function removeEducatif(Educatif $educatif): self
    {
        if ($this->educatifs->contains($educatif)) {
            $this->educatifs->removeElement($educatif);
            // set the owning side to null (unless already changed)
            if ($educatif->getEtape() === $this) {
                $educatif->setEtape(null);
            }
        }

        return $this;
    }
}
