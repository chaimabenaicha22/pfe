<?php

namespace App\Entity;

use App\Repository\FournisseurServiceInternetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurServiceInternetRepository::class)
 */
class FournisseurServiceInternet
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
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recueFacture;

    /**
     *
     *  @ORM\OneToMany(targetEntity="App\Entity\ServiceHebergement", mappedBy="FSI")
     *
     */
    private $serviceH;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getRecueFacture(): ?string
    {
        return $this->recueFacture;
    }

    public function setRecueFacture(string $recueFacture): self
    {
        $this->recueFacture = $recueFacture;

        return $this;
    }

    /**
     * Get the value of serviceH
     */
    public function getServiceH()
    {
        return $this->serviceH;
    }

    /**
     * Set the value of serviceH
     *
     * @return  self
     */
    public function setServiceH($serviceH)
    {
        $this->serviceH = $serviceH;

        return $this;
    }
}
