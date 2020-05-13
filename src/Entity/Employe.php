<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use App\Repository\EmployeRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EmployeRepository::class)
 */
class Employe extends Utilisateur
{

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("emp:read")
     */
    private $poste;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("emp:read")
     */
    private $service;

    /**
     * Many Groups have Many Users.
     * @ManyToMany(targetEntity="App\Entity\Projet", mappedBy="employe")
     */
    private $projet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("emp:read")
     */
    private $photo;

    /**
     * @ORM\Column(type="date")
     * @Groups("emp:read")
     */
    private $date_recrutement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("emp:read")
     */
    private $diplome;

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get many Groups have Many Users.
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set many Groups have Many Users.
     *
     * @return  self
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;

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

    public function getDateRecrutement(): ?\DateTimeInterface
    {
        return $this->date_recrutement;
    }

    public function setDateRecrutement(\DateTimeInterface $date_recrutement): self
    {
        $this->date_recrutement = $date_recrutement;

        return $this;
    }

    public function getDiplome(): ?string
    {
        return $this->diplome;
    }

    public function setDiplome(string $diplome): self
    {
        $this->diplome = $diplome;

        return $this;
    }
}
