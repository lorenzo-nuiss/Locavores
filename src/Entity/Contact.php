<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


Class Contact{
    /**
     * @var string|null
     * @Assert\Length(
     *  min = 3,
     *  max = 80,
     *  minMessage = "Nom saisi invalide",
     *  maxMessage = "Nom saisi invalide"
     * )
     * @Assert\NotBlank(message="Veuillez indiquer votre nom")
     */
    private $nom;

    /**
     * @var string|null
     * @Assert\Regex(
     *  pattern="/[0-9]{10}/"
     * )
     */
    private $telephone;

    /**
     * @var string|null
     * @Assert\Email()
     * @Assert\NotBlank(message="Veuillez indiquer votre nom")
     */
    private $email;


    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min="6")
     */
    private $message;

    
    /**
     * @var string|null
     * @Assert\NotBlank()
     */
    private $statut;


    /**
     * @return null|string
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param null|string $nom
     * @return Contact
     */
    public function setNom(?string $nom): Contact
    {
        $this->nom = $nom;
        return $this;
    }


    /**
     * @return null|string
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param null|string $telephone
     * @return Contact
     */
    public function setTelephone(?string $telephone): Contact
    {
        $this->telephone = $telephone;
        return $this;
    }
    

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return Contact
     */
    public function setEmail(?string $email): Contact
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param null|string $message
     * @return Contact
     */
    public function setMessage(?string $message): Contact
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * @param null|string $statut
     * @return Contact
     */
    public function setStatut(?string $statut): Contact
    {
        $this->statut = $statut;
        return $this;
    }
}