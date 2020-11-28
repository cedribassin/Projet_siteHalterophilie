<?php

namespace App\Entity;

use App\Repository\ApprentissageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApprentissageRepository::class)
 */
class Apprentissage
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
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $texte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Etape::class, mappedBy="apprentissage")
     */
    private $etape;

    public function __construct()
    {
        $this->etape = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Etape[]
     */
    public function getEtape(): Collection
    {
        return $this->etape;
    }

    public function addEtape(Etape $etape): self
    {
        if (!$this->etape->contains($etape)) {
            $this->etape[] = $etape;
            $etape->setApprentissage($this);
        }

        return $this;
    }

    public function removeEtape(Etape $etape): self
    {
        if ($this->etape->contains($etape)) {
            $this->etape->removeElement($etape);
            // set the owning side to null (unless already changed)
            if ($etape->getApprentissage() === $this) {
                $etape->setApprentissage(null);
            }
        }

        return $this;
    }
}
