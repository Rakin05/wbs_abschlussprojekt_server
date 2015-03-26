<?php

namespace WBS\Fussball\ApiBundle\Services;

use WBS\Fussball\ApiBundle\Entity\SpielRepository;

class SpieleService
{

    /**
     * @var SpielRepository
     */
    private $spieleRepository;

    
    public function __construct(SpielRepository $spieleRepository)
    {
        $this->spieleRepository = $spieleRepository;
    }

    public function getAlleSpiele()
    {
        return $this->spieleRepository->findAll();
    }

    public function getSpiel($id)
    {
        return $this->spieleRepository->findOneById($id);
    }
}