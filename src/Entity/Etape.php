<?php

namespace App\Entity;

use App\Repository\EtapeRepository;
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
}
