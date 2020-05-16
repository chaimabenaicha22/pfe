<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\ServiceHebergement;
use Doctrine\ORM\Mapping\OneToMany;
use App\Repository\ProjetRepository;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ProjetRepository::class)
 * @ApiResource(
 * normalizationContext={"groups"={"emp:read"}})
 */
class Projet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"emp:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"emp:read"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="date")
     * @Groups({"emp:read"})
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     * @Groups({"emp:read"})
     */
    private $dateFin;

    /**
     * @ORM\Column(type="float")
     * @Groups({"emp:read"})
     */
    private $cout;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"emp:read"})
     */
    private $typeProjet;

    /**
     * @ORM\Column(type="float")
     * @Groups({"emp:read"})
     */
    private $maintenance;

    /**
     * @ORM\Column(type="float")
     * @Groups({"emp:read"})
     */
    private $devise;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"emp:read"})
     */
    private $pays;

    /**
     * @ORM\Column(type="float")
     * @Groups({"emp:read"})
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
     * @Groups({"emp:read"})
     *
     */
    /* private $employe;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Technologie",mappedBy="projet")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $technologie;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AffecterA",mappedBy="projet")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $Affecter;
    public function __construct()
    {
        $this->serviceH = new ArrayCollection();
        $this->materiel = new ArrayCollection();
        $this->contact = new ArrayCollection();
        $this->technologie = new ArrayCollection();
        $this->Affecter = new ArrayCollection();
    }
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
     * Get many Users have Many Groups.
     */
    /* public function getEmploye()
    {
        return $this->employe;
    }
*/
    /**
     * Set many Users have Many Groups.
     *
     * @return  self
     */
    /*public function setEmploye($employe)
    {
        $this->employe = $employe;

        return $this;
    }*/

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

    /**
     * Get the value of Affecter
     */
    public function getAffecter()
    {
        return $this->Affecter;
    }

    /**
     * Set the value of Affecter
     *
     * @return  self
     */
    /* public function setAffecter($Affecter)
    {
        $this->Affecter = $Affecter;

        return $this;
    }*/
    /**
     * @return Collection|Technologie[]
     */
    /*public function getTechnologie(): Collection
    {
        return $this->technologie;
    }

    public function addTechnologie(Technologie $technologies): self
    {
        if (!$this->technologie->contains($technologies)) {
            $this->technologie[] = $technologies;
        }

        return $this;
    }

    public function removeUser(Projet $technologies): self
    {
        if ($this->technologie->contains($technologies)) {
            $this->technologie->removeElement($technologies);
        }

        return $this;
    }*/

    /**
     * Get the value of technologie
     */
    public function getTechnologie()
    {
        $tech = $this->technologie->map(function ($technologie) {
            return $technologie->getNom();
        })->toArray();
        return $tech;
    }

    /**
     * Set the value of technologie
     *
     * @return  self
     */
    public function setTechnologie($technologie)
    {
        $this->technologie = $technologie;

        return $this;
    }
}
