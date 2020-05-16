<?php

namespace App\Entity;

use App\Entity\Utilisateur;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AdministrateurRepository;

/**
 * @ORM\Entity(repositoryClass=AdministrateurRepository::class)
 * @ApiResource()
 */
class Administrateur extends Utilisateur
{
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LigneSG",mappedBy="Administrateur")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $ligneSG;

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
