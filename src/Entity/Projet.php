<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use App\Repository\ProjetRepository;
use Doctrine\ORM\Mapping\ManyToMany;

/**
 * @ORM\Entity(repositoryClass=ProjetRepository::class)
 */
class Projet
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
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\Column(type="float")
     */
    private $cout;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeProjet;

    /**
     * @ORM\Column(type="float")
     */
    private $maintenance;

    /**
     * @ORM\Column(type="float")
     */
    private $devise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="float")
     */
    private $coutEstime;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ServiceHebergement",mappedBy="projet")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $serviceH;
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Materiel",inversedBy="projet")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $materiel;
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Contact",inversedBy="projet")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $contact;
    /**
     *
     * @ManyToMany(targetEntity="App\Entity\Employe", inversedBy="projet")
     *
     */
    private $employe;
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

    public function getCout(): ?float
    {
        return $this->cout;
    }

    public function setCout(float $cout): self
    {
        $this->cout = $cout;

        return $this;
    }

    public function getTypeProjet(): ?string
    {
        return $this->typeProjet;
    }

    public function setTypeProjet(string $typeProjet): self
    {
        $this->typeProjet = $typeProjet;

        return $this;
    }

    public function getMaintenance(): ?float
    {
        return $this->maintenance;
    }

    public function setMaintenance(float $maintenance): self
    {
        $this->maintenance = $maintenance;

        return $this;
    }

    public function getDevise(): ?float
    {
        return $this->devise;
    }

    public function setDevise(float $devise): self
    {
        $this->devise = $devise;

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

    public function getCoutEstime(): ?float
    {
        return $this->coutEstime;
    }

    public function setCoutEstime(float $coutEstime): self
    {
        $this->coutEstime = $coutEstime;

        return $this;
    }
    /**
     *
     * @return ServiceHebergement
     */
    public function getServiceH(): ServiceHebergement
    {
        return $this->serviceH;
    }
    /**
     *@param ServiceHebergement $serviceH
     */

    public function setServiceH(ServiceHebergement $serviceH): self
    {
        $this->serviceH = $serviceH;
        return $this;
    }



    /**
     * Get many Users have Many Groups.
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Set many Users have Many Groups.
     *
     * @return  self
     */
    public function setEmploye($employe)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get the value of materiel
     */
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
     * Set the value of materiel
     *
     * @return  self
     */
    public function setMateriel($materiel)
    {
        $this->materiel = $materiel;

        return $this;
    }

    /**
     * Get the value of contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @return  self
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }
}
