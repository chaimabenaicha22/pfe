<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use App\Repository\AffecterARepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=AffecterARepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"emp:read"}})
 */
class AffecterA
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ManyToOne(targetEntity="App\Entity\Projet", inversedBy="Affecter")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"emp:read"})
     */
    private $projet;
    /**
     * @ManyToOne(targetEntity="App\Entity\Employe", inversedBy="Affecter")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"emp:read"})
     */
    private $employe;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of projet
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set the value of projet
     *
     * @return  self
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;

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
}
