<?php

namespace WBS\Fussball\ApiBundle\Services;

use Doctrine\ORM\EntityManager;

use WBS\Fussball\ApiBundle\Entity\LigaSaison;
use WBS\Fussball\ApiBundle\Entity\Liga;
use WBS\Fussball\ApiBundle\Entity\LigaSaisonRepository;
use WBS\Fussball\ApiBundle\Entity\LigaRepository;

class LigaSaisonService{

    /**
     *@var LigaSaisonRepository
     */
    private $ligaSaisonRepository;

    /**
     *@var LigaRepository
     */
    private $ligaRepository;
    
    /**
     *@var EntityManager
     */
    private $manager;

    public function __construct(LigaSaisonRepository $ligaSaisonRepository, LigaRepository $ligaRepository, EntityManager $manager)
    {
        $this->ligaSaisonRepository = $ligaSaisonRepository;
        $this->ligaRepository = $ligaRepository;
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

    public function createNew($ligaId, $saisonStart, $saisonEnde)
    {
        $liga = $this->ligaRepository->findOneById($ligaId);

        if($liga == null)
            return;

        $ligaSaison = new LigaSaison();
        $ligaSaison->setLigaBeginn(new \DateTime(date("Y-m-d", $saisonStart)));
        $ligaSaison->setLigaEnde(new \DateTime(date("Y-m-d", $saisonEnde)));
        $ligaSaison->setLiga($liga);

        $this->manager->persist($ligaSaison);
        $this->manager->flush();
    }
}