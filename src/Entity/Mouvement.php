<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\MouvementRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;



/**
 * @ORM\Entity(repositoryClass=MouvementRepository::class)
 * @Vich\Uploadable
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

    /**
     * @ORM\ManyToMany(targetEntity=TypeMouvement::class, mappedBy="mouvement", cascade={"persist"})
     */
    private $typeMouvements;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="mouvement_images", fileNameProperty="image")
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\ManyToMany(targetEntity=Seance::class, mappedBy="mouvement")
     */
    private $seances;


    public function __construct()
    {
        $this->typeMouvements = new ArrayCollection();
        $this->seances = new ArrayCollection();
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

    /**
     * @return Collection|TypeMouvement[]
     */
    public function getTypeMouvements(): Collection
    {
        return $this->typeMouvements;
    }

    public function addTypeMouvement(TypeMouvement $typeMouvement): self
    {
        if (!$this->typeMouvements->contains($typeMouvement)) {
            $this->typeMouvements[] = $typeMouvement;
            $typeMouvement->addMouvement($this);
        }

        return $this;
    }

    public function removeTypeMouvement(TypeMouvement $typeMouvement): self
    {
        if ($this->typeMouvements->contains($typeMouvement)) {
            $this->typeMouvements->removeElement($typeMouvement);
            $typeMouvement->removeMouvement($this);
        }

        return $this;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImageFile(?File $imageFile = null): self
    {
        $this->imageFile = $imageFile;

        //On test si on a bien récupéré une info de type UploadedFile
        if($this->imageFile instanceof UploadedFile){
            $this->updated_at = new \DateTime('now');
        }
        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection|Seance[]
     */
    public function getSeances(): Collection
    {
        return $this->seances;
    }

    public function addSeance(Seance $seance): self
    {
        if (!$this->seances->contains($seance)) {
            $this->seances[] = $seance;
            $seance->addMouvement($this);
        }

        return $this;
    }

    public function removeSeance(Seance $seance): self
    {
        if ($this->seances->contains($seance)) {
            $this->seances->removeElement($seance);
            $seance->removeMouvement($this);
        }

        return $this;
    }

}