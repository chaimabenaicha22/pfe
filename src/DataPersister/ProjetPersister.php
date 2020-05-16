<?php

namespace App\DataPersister;


use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\Projet;

class ProjetPersister implements DataPersisterInterface
{
    protected $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function supports($data): bool
    {
        return $data instanceof Projet;
    }
    public function persist($data)
    {
        $data->setDateDebut(new \DateTime());
        $data->setDateFin(new \DateTime());
        $this->em->persist($data);
        $this->em->flush();
    }
    public function remove($data)
    {
        $this->em->remove($data);
        $this->em->flush();
    }
}
