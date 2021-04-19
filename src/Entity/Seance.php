<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SeanceRepository::class)
 */
class Seance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreSerie;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreReps;

    /**
     * @ORM\Column(type="integer")
     */
    private $intensite;

    /**
     * @ORM\Column(type="integer")
     */
    private $recuperation;

    /**
     * @ORM\OneToMany(targetEntity=Mouvement::class, mappedBy="seance")
     */
    private $mouvement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    public function __construct()
    {
        $this->mouvement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreSerie(): ?int
    {
        return $this->nombreSerie;
    }

    public function setNombreSerie(int $nombreSerie): self
    {
        $this->nombreSerie = $nombreSerie;

        return $this;
    }

    public function getNombreReps(): ?int
    {
        return $this->nombreReps;
    }

    public function setNombreReps(int $nombreReps): self
    {
        $this->nombreReps = $nombreReps;

        return $this;
    }

    public function getIntensite(): ?int
    {
        return $this->intensite;
    }

    public function setIntensite(int $intensite): self
    {
        $this->intensite = $intensite;

        return $this;
    }

    public function getRecuperation(): ?int
    {
        return $this->recuperation;
    }

    public function setRecuperation(int $recuperation): self
    {
        $this->recuperation = $recuperation;

        return $this;
    }

    /**
     * @return Collection|Mouvement[]
     */
    public function getMouvement(): Collection
    {
        return $this->mouvement;
    }

    public function addMouvement(Mouvement $mouvement): self
    {
        if (!$this->mouvement->contains($mouvement)) {
            $this->mouvement[] = $mouvement;
            $mouvement->setSeance($this);
        }

        return $this;
    }

    public function removeMouvement(Mouvement $mouvement): self
    {
        if ($this->mouvement->contains($mouvement)) {
            $this->mouvement->removeElement($mouvement);
            // set the owning side to null (unless already changed)
            if ($mouvement->getSeance() === $this) {
                $mouvement->setSeance(null);
            }
        }

        return $this;
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
}
