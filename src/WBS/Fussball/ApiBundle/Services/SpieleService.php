<?php

namespace WBS\Fussball\ApiBundle\Services;

use Doctrine\ORM\EntityManager;

use WBS\Fussball\ApiBundle\Entity\SpielRepository;
use WBS\Fussball\ApiBundle\Entity\Spiel;

use WBS\Fussball\ApiBundle\Entity\LigaSaisonRepository;
use WBS\Fussball\ApiBundle\Entity\VereinRepository;

class SpieleService
{

    /**
     * @var SpielRepository
     */
    private $spieleRepository;

    /**
     * @var LigaSaisonRepository
     */
    private $ligaSaisonRepository;
    
    /**
     * @var VereinRepository
     */
    private $vereinRepository;

    /**
     * @var EntityManager
     */
    private $manager;
    
    public function __construct(SpielRepository $spieleRepository, LigaSaisonRepository $ligaSaisonRepository, VereinRepository $vereinRepository, EntityManager $manager)
    {
        $this->spieleRepository = $spieleRepository;
        $this->ligaSaisonRepository = $ligaSaisonRepository;
        $this->vereinRepository = $vereinRepository;
        $this->manager = $manager;
    }

    public function getAlleSpiele()
    {
        return $this->spieleRepository->findAll();
    }

    public function getSpiel($id)
    {
        return $this->spieleRepository->findOneById($id);
    }

    public function createNewSpiel($ligaSaisonId, $heimVereinId, $gastVereinId, $heimTore, $gastTore, $spielTag)
    {
        $ligaSaison = $this->ligaSaisonRepository->findOneByLigaSaisonId($ligaSaisonId);
        $heimVerein = $this->vereinRepository->findOneByVereinsId($heimVereinId);
        $gastVerein = $this->vereinRepository->findOneByVereinsId($gastVereinId);

        $spiel = new Spiel();
        $spiel->setLigaSaison($ligaSaison);
        $spiel->setHeimVerein($heimVerein);
        $spiel->setGastVerein($gastVerein);
        $spiel->setHeimTore($heimTore);
        $spiel->setGastTore($gastTore);

        $spiel->setSpielTag(new \DateTime(date("Y-m-d", $spielTag)));

        $this->manager->persist($spiel);
        $this->manager->flush();
    }
}