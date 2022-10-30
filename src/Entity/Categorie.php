<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 * @UniqueEntity(
 * fields={"nom"},
 * message="Cette categorie existe déjà"
 * )
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *  min = 2,
     *  max = 60,
     *  minMessage = "Le nom doit faire plus de 2 caractère",
     *  maxMessage = "Le nom doit faire moins de 60 caractère" 
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Veuilliez ajouter une photo pour illustrer la catégorie")
     */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity=Agriculteur::class, mappedBy="Categorie")
     */
    private $agriculteurs;

    /**
     * @ORM\OneToMany(targetEntity=Images::class, mappedBy="categorie", orphanRemoval=true, cascade={"persist"})
     */
    private $images;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->agriculteurs = new ArrayCollection();
        $this->images = new ArrayCollection();
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
     * @return Collection|Agriculteur[]
     */
    public function getAgriculteurs(): Collection
    {
        return $this->agriculteurs;
    }

    public function addAgriculteur(Agriculteur $agriculteur): self
    {
        if (!$this->agriculteurs->contains($agriculteur)) {
            $this->agriculteurs[] = $agriculteur;
            $agriculteur->addCategorie($this);
        }

        return $this;
    }

    public function removeAgriculteur(Agriculteur $agriculteur): self
    {
        if ($this->agriculteurs->removeElement($agriculteur)) {
            $agriculteur->removeCategorie($this);
        }

        return $this;
    }

    /**
     * @return Collection|Images[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setCategorie($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getCategorie() === $this) {
                $image->setCategorie(null);
            }
        }

        return $this;
    }
}
