<?php

namespace WBS\Fussball\ApiBundle\Services;

use Doctrine\ORM\EntityManager;

use WBS\Fussball\ApiBundle\Entity\Liga;
use WBS\Fussball\ApiBundle\Entity\LigaRepository;

class LigaService{

    /**
     *@var LigaRepository
     */
    private $ligaRepository;

    /**
     *@var EntityManager
     */
    private $manager;

    public function __construct(LigaRepository $ligaRepository, EntityManager $manager)
    {
        $this->ligaRepository = $ligaRepository;
        $this->manager = $manager;
    }

    public function getAlleLigen()
    {
        return $this->ligaRepository->findAll();
    }

    public function getLiga($id)
    {
        return $this->ligaRepository->findOneById($id);
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