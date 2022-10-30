<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AgriculteurRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=AgriculteurRepository::class)
 * @UniqueEntity(
 * fields={"email"},
 * message="Cette email existe déjà"
 * )
 */
class Agriculteur implements UserInterface
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
     *  min = 3,
     *  max = 40,
     *  minMessage = "Nom saisi invalide",
     *  maxMessage = "Nom saisi invalide" 
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_domaine;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *  min = 5,
     *  max = 200,
     *  minMessage = "Adresse trop courte",
     *  maxMessage = "Adresse trop longue" 
     * )
     */
    private $adresse;

    /**
     * @Assert\NotBlank(message="Veuillez renseigner votre ville")
     * @Assert\Length(
     *  min = 3,
     *  max = 200,
     *  minMessage = "Le nom de  ville est trop court",
     *  maxMessage = "Le nom de ville saisi est trop long" 
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Regex("/^[0-9]{5}$/",
     *  message="Le code postal saisi n'est pas reconnu"
     * )
     */
    private $code_postal;

    
    /**
     * @ORM\Column(type="text")
     */
    private $descriptif;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *  min = 8,
     *  minMessage = "Votre mot de passe doit faire plus de 6 caractères",
     * )
     */
    private $password;

    /**
    * @Assert\EqualTo(propertyPath="password", message="Vous n'avez pas tapé le même mot de passe")
    */
    private $confirm_password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponible;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     *     message = "l'email '{{ value }}' n'est pas valide"
     * )
     */
    private $email;

    /**
     * @ORM\ManyToMany(targetEntity=Categorie::class, inversedBy="agriculteurs")
     */
    private $Categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Regex("/^[0-9]{10}$/",
     *  message="Le numero saisi n'est pas reconnu"
     * )
     */
    private $tel_portable;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Regex("/^[0-9]{10}$/",
     *  message="Le numero saisi n'est pas reconnu"
     * )
     */
    private $tel_fixe;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\OneToMany(targetEntity=Images::class, mappedBy="agriculteur", orphanRemoval=true)
     */
    private $images;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activation_token;


    public function __construct()
    {
        $this->Categorie = new ArrayCollection();
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

    public function getNomDomaine(): ?string
    {
        return $this->nom_domaine;
    }

    public function setNomDomaine(string $nom_domaine): self
    {
        $this->nom_domaine = $nom_domaine;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirm_password;
    }

    public function setConfirmPassword(string $confirm_password): self
    {
        $this->confirm_password = $confirm_password;

        return $this;
    }


    public function getDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): self
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getCategorie(): Collection
    {
        return $this->Categorie;
    }

    public function addCategorie(Categorie $categorie): self
    {
        if (!$this->Categorie->contains($categorie)) {
            $this->Categorie[] = $categorie;
        }

        return $this;
    }

    public function removeCategorie(Categorie $categorie): self
    {
        $this->Categorie->removeElement($categorie);

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
    public function eraseCredentials()
    { 
    }
    public function getSalt()
    { 
    }
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    public function getTelPortable(): ?string
    {
        return $this->tel_portable;
    }

    public function setTelPortable(?string $tel_portable): self
    {
        $this->tel_portable = $tel_portable;

        return $this;
    }

    public function getTelFixe(): ?string
    {
        return $this->tel_fixe;
    }

    public function setTelFixe(?string $tel_fixe): self
    {
        $this->tel_fixe = $tel_fixe;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

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
            $image->setAgriculteur($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getAgriculteur() === $this) {
                $image->setAgriculteur(null);
            }
        }

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getActivationToken(): ?string
    {
        return $this->activation_token;
    }

    public function setActivationToken(?string $activation_token): self
    {
        $this->activation_token = $activation_token;

        return $this;
    }    
  }
