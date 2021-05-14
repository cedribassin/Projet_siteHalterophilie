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
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity=Mouvement::class, inversedBy="seances", cascade={"persist"})
     */
    private $mouvement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intensite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nbSerie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nbRepetition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recuperation;

    /**
     * @ORM\ManyToOne(targetEntity=Programme::class, inversedBy="seance")
     */
    private $programme;

    public function __construct()
    {
        $this->mouvement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
        }

        return $this;
    }

    public function removeMouvement(Mouvement $mouvement): self
    {
        if ($this->mouvement->contains($mouvement)) {
            $this->mouvement->removeElement($mouvement);
        }

        return $this;
    }

    public function getIntensite(): ?string
    {
        return $this->intensite;
    }

    public function setIntensite(string $intensite): self
    {
        $this->intensite = $intensite;

        return $this;
    }

    public function getNbSerie(): ?string
    {
        return $this->nbSerie;
    }

    public function setNbSerie(string $nbSerie): self
    {
        $this->nbSerie = $nbSerie;

        return $this;
    }

    public function getNbRepetition(): ?string
    {
        return $this->nbRepetition;
    }

    public function setNbRepetition(string $nbRepetition): self
    {
        $this->nbRepetition = $nbRepetition;

        return $this;
    }

    public function getRecuperation(): ?string
    {
        return $this->recuperation;
    }

    public function setRecuperation(string $recuperation): self
    {
        $this->recuperation = $recuperation;

        return $this;
    }

    public function getProgramme(): ?Programme
    {
        return $this->programme;
    }

    public function setProgramme(?Programme $programme): self
    {
        $this->programme = $programme;

        return $this;
    }
}