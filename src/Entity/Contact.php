<?php

namespace App\Entity;

use App\Entity\Utilisateur;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use App\Repository\ContactRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 * @ApiResource()
 */
class Contact extends Utilisateur
{
    /**
     *
     *  @ORM\ManyToMany(targetEntity="App\Entity\Projet", mappedBy="contact")
     *
     */
    private $projet;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Entreprise",inversedBy="contact")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $entreprise;

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
     * Get the value of entreprise
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set the value of entreprise
     *
     * @return  self
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }
}
