<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TypeMouvementRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=TypeMouvementRepository::class)
 * @Vich\Uploadable
 */
class TypeMouvement
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
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="typeMouvement_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\ManyToMany(targetEntity=Mouvement::class, inversedBy="typeMouvements", cascade={"persist"})
     */
    private $mouvement;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updated_at;

    public function __construct()
    {
        $this->mouvement = new ArrayCollection();
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

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
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

    
}
