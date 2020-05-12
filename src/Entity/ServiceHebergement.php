<?php

namespace App\Entity;

use App\Repository\ServiceHebergementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceHebergementRepository::class)
 */
class ServiceHebergement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeService;

    /**
     * @ORM\Column(type="date")
     */
    private $duree;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Projet", inversedBy="serviceH")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FournisseurServiceInternet",inversedBy="serviceH")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $FSI;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeService(): ?string
    {
        return $this->typeService;
    }

    public function setTypeService(string $typeService): self
    {
        $this->typeService = $typeService;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }
    /**
     *
     * @return Projet
     */
    public function getProjet(): Projet
    {
        return $this->projet;
    }
    /**
     *@param Projet $projet
     */

    public function setProjet(Projet $projet): void
    {
        $this->projet = $projet;
    }

    /**
     * Get the value of FSI
     */
    public function getFSI()
    {
        return $this->FSI;
    }

    /**
     * Set the value of FSI
     *
     * @return  self
     */
    public function setFSI($FSI)
    {
        $this->FSI = $FSI;

        return $this;
    }
}
