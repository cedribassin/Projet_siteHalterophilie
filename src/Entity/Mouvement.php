<?php

namespace App\Entity;

use App\Repository\MouvementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MouvementRepository::class)
 */
class Mouvement
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
     * @ORM\Column(type="string", length=255)
     */
    private $objectif;

    /**
     * @ORM\Column(type="float")
     */
    private $intensite;

    /**
     * @ORM\Column(type="text")
     */
    private $consignes;

    /**
     * @ORM\Column(type="text")
     */
    private $erreur;

    /**
     * @ORM\Column(type="text")
     */
    private $correctif;

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

    public function getObjectif(): ?string
    {
        return $this->objectif;
    }

    public function setObjectif(string $objectif): self
    {
        $this->objectif = $objectif;

        return $this;
    }

    public function getIntensite(): ?float
    {
        return $this->intensite;
    }

    public function setIntensite(float $intensite): self
    {
        $this->intensite = $intensite;

        return $this;
    }

    public function getConsignes(): ?string
    {
        return $this->consignes;
    }

    public function setConsignes(string $consignes): self
    {
        $this->consignes = $consignes;

        return $this;
    }

    public function getErreur(): ?string
    {
        return $this->erreur;
    }

    public function setErreur(string $erreur): self
    {
        $this->erreur = $erreur;

        return $this;
    }

    public function getCorrectif(): ?string
    {
        return $this->correctif;
    }

    public function setCorrectif(string $correctif): self
    {
        $this->correctif = $correctif;

        return $this;
    }
}
