<?php

namespace WBS\Fussball\ApiBundle\Services;

use Doctrine\ORM\EntityManager;

use WBS\Fussball\ApiBundle\Entity\Verein;
use WBS\Fussball\ApiBundle\Entity\VereinRepository;

class VereinsService{

    /**
     * @var VereinRepository
     */
    private $vereinRepository;

    /**
     * @var EntityManager
     */
    private $manager;
    
    public function __construct(VereinRepository $vereinRepository, EntityManager $manager)
    {
        $this->vereinRepository = $vereinRepository;
        $this->manager = $manager;
    }

    public function getAlleVereine()
    {
        return $this->vereinRepository->findAll();
    }

    public function getVerein($id)
    {
        return $this->vereinRepository->findOneByVereinsId($id);
    }

    public function createNew($vereinsName)
    {
        $verein = new Verein();
        $verein->setVereinsName($vereinsName);

        $this->manager->persist($verein);
        $this->manager->flush();
    }

} 