<?php

namespace WBS\Fussball\ApiBundle\Services;

use Doctrine\ORM\EntityManager;

use WBS\Fussball\ApiBundle\Entity\LigaSaison;
use WBS\Fussball\ApiBundle\Entity\LigaSaisonRepository;

class LigaSaisonService{

    /**
     *@var LigaSaisonRepository
     */
    private $ligaSaisonRepository;

    /**
     *@var EntityManager
     */
    private $manager;

    public function __construct(LigaSaisonRepository $ligaSaisonRepository, EntityManager $manager)
    {
        $this->ligaSaisonRepository = $ligaSaisonRepository;
        $this->manager = $manager;
    }

    public function getAlleSaisons()
    {
        return $this->ligaSaisonRepository->findAll();
    }

    public function getSaison($id)
    {
        return $this->ligaSaisonRepository->findOneByLigaSaisonId($id);
    }

    public function createNew($ligaName, $ligaLand)
    {
        $liga = new Liga();
        $liga->setLigaName($ligaName);
        $liga->setLigaLand($ligaLand);

        $this->manager->persist($liga);
        $this->manager->flush();
    }
}