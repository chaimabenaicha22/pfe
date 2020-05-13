<?php

namespace App\Entity;

use App\Entity\Utilisateur;
use Doctrine\ORM\Mapping as ORM;
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
}
