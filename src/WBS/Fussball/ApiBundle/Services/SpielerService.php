<?php

namespace WBS\Fussball\ApiBundle\Services;

use Doctrine\ORM\EntityManager;

use WBS\Fussball\ApiBundle\Entity\Spieler;
use WBS\Fussball\ApiBundle\Entity\Verein;
use WBS\Fussball\ApiBundle\Entity\SpielerRepository;
use WBS\Fussball\ApiBundle\Entity\VereinRepository;

class SpielerService
{
    /**
     * @var SpielerRepository
     */
    private $spielerRepository;

    /**
     * @var VereinRepository
     */
    private $vereinRepository;

    /**
     * @var EntityManager
     */
    private $manager;
    
    public function __construct(SpielerRepository $spielerRepository, VereinRepository $vereinRepository, EntityManager $manager)
    {
        $this->spielerRepository = $spielerRepository;
        $this->vereinRepository = $vereinRepository;
        $this->manager = $manager;
    }

    public function getAlleSpieler()
    {
        return $this->spielerRepository->findAll();
    }

    public function getSpieler($id)
    {
        return $this->spielerRepository->findOneById($id);
    }

    public function createNewSpieler($vereinId, $spielerName)
    {
        $spieler = new Spieler();
        $spieler->setSpielerName($spielerName);

        $verein = $this->vereinRepository->findOneByVereinsId($vereinId);

        $spieler->setVerein($verein);

        $this->manager->persist($spieler);
        
        $this->manager->flush();
    }
}
