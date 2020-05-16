<?php

namespace App\Entity;

use App\Entity\Projet;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\ManyToMany;
use App\Repository\TechnologieRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TechnologieRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"emp:read"}})
 */
class Technologie
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"emp:read"})
     */
    private $version;
    /**
     * @ManyToOne(targetEntity="App\Entity\Projet", inversedBy="technologie")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $projet;
    /**
     * @ManyToOne(targetEntity="App\Entity\Employe", inversedBy="technologie")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $employe;
    public function __construct()
    {
        $this->projet = new ArrayCollection();
        $this->employe = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get the value of employe
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Set the value of employe
     *
     * @return  self
     */
    public function setEmploye($employe)
    {
        $this->employe = $employe;

        return $this;
    }
    /**
     * #return Collection|Projet[]
     */
    public function getProjet()
    {
        $project = $this->projet->map(function ($projet) {
            return $projet->getLibelle();
        })->toArray();
        return $project;
    }
    public function addProjet(Projet $project): self
    {
        if (!$this->projet->contains($project)) {
            $this->projet[] = $project;
        }
        return $this;
    }
    public function removeProjet(Projet $project): self
    {
        if ($this->project->contains($project)) {
            $this->project->removeElement($project);
        }
        return $this;
    }
}
