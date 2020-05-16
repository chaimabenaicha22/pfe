<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use App\Repository\LigneSGRepository;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=LigneSGRepository::class)
 */
class LigneSG
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numAuto;

    /**
     * @ORM\Column(type="date")
     */
    private $datePayement;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="float")
     */
    private $montantTotal;
    /**
     * @ManyToOne(targetEntity="App\Entity\Administrateur", inversedBy="ligneSG")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $Administrateur;
    /**
     * @ManyToOne(targetEntity="App\Entity\ServicesGeneraux", inversedBy="ligneSG")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $ServicesSG;
    public function __construct()
    {
        $this->Administrateur = new ArrayCollection();
        $this->ServicesSG = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumAuto(): ?int
    {
        return $this->numAuto;
    }

    public function setNumAuto(int $numAuto): self
    {
        $this->numAuto = $numAuto;

        return $this;
    }

    public function getDatePayement(): ?\DateTimeInterface
    {
        return $this->datePayement;
    }

    public function setDatePayement(\DateTimeInterface $datePayement): self
    {
        $this->datePayement = $datePayement;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getMontantTotal(): ?float
    {
        return $this->montantTotal;
    }

    public function setMontantTotal(float $montantTotal): self
    {
        $this->montantTotal = $montantTotal;

        return $this;
    }

    /**
     * Get the value of Administrateur
     */
    public function getAdministrateur()
    {
        return $this->Administrateur;
    }

    /**
     * Set the value of Administrateur
     *
     * @return  self
     */
    public function setAdministrateur($Administrateur)
    {
        $this->Administrateur = $Administrateur;

        return $this;
    }

    /**
     * Get the value of ServicesSG
     */
    public function getServicesSG()
    {
        return $this->ServicesSG;
    }

    /**
     * Set the value of ServicesSG
     *
     * @return  self
     */
    public function setServicesSG($ServicesSG)
    {
        $this->ServicesSG = $ServicesSG;

        return $this;
    }
}
