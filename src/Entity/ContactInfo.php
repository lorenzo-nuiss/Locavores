<?php

namespace App\Entity;

use App\Repository\ContactInfoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ContactInfoRepository::class)
 */
class ContactInfo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     *     message = "l'email '{{ value }}' n'est pas valide"
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel_fixe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel_portable;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getTelFixe(): ?string
    {
        return $this->tel_fixe;
    }

    public function setTelFixe(?string $tel_fixe): self
    {
        $this->tel_fixe = $tel_fixe;

        return $this;
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
}
