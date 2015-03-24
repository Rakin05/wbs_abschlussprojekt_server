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

    public function __construct(VereinRepository $vereinRepository)
    {
        $this->vereinRepository = $vereinRepository;
    }

    public function getAlleVereine()
    {
        return $this->vereinRepository->findAll();
    }

    public function getVerein($id)
    {
        return $this->vereinRepository->findOneByVereinsId($id);
    }

} 