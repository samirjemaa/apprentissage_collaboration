<?php

namespace App\Entity;

use App\Repository\TuteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TuteurRepository::class)
 */
class Tuteur extends User
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
    private $id_tuteur;

    /**
     * @ORM\Column(type="text")
     */
    private $biography;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTuteur(): ?string
    {
        return $this->id_tuteur;
    }

    public function setIdTuteur(string $id_tuteur): self
    {
        $this->id_tuteur = $id_tuteur;

        return $this;
    }

    public function getBiography(): ?string
    {
        return $this->biography;
    }

    public function setBiography(string $biography): self
    {
        $this->biography = $biography;

        return $this;
    }
}