<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ServicesGenerauxRepository;

/**
 * @ORM\Entity(repositoryClass=ServicesGenerauxRepository::class)
 * @ApiResource()
 */
class ServicesGeneraux
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
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LigneSG",mappedBy="ServicesSG")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $ligneSG;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of ligneSG
     */
    public function getLigneSG()
    {
        return $this->ligneSG;
    }

    /**
     * Set the value of ligneSG
     *
     * @return  self
     */
    public function setLigneSG($ligneSG)
    {
        $this->ligneSG = $ligneSG;

        return $this;
    }
}
