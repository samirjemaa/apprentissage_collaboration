<?php

namespace App\Entity;

use App\Repository\ApprenantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApprenantRepository::class)
 */
class Apprenant extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", length=255)
     */
    private $id_apprenant;

    /**
     * @ORM\ManyToOne(targetEntity=NiveauScolaire::class, inversedBy="apprenants")
     */
    private $NivScol;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdApprenant(): ?string
    {
        return $this->id_apprenant;
    }

    public function setIdApprenant(string $id_apprenant): self
    {
        $this->id_apprenant = $id_apprenant;

        return $this;
    }

    public function getNivScol(): ?NiveauScolaire
    {
        return $this->NivScol;
    }

    public function setNivScol(?NiveauScolaire $NivScol): self
    {
        $this->NivScol = $NivScol;

        return $this;
    }
}