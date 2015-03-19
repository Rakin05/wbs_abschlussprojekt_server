<?php

namespace WBS\Fussball\ApiBundle\Services;

use WBS\Fussball\ApiBundle\Entity\Liga;
use WBS\Fussball\ApiBundle\Entity\LigaRepository;

class LigaService{

    /**
     *@var LigaRepository
     */
    private $ligaRepository;

    public function __construct(LigaRepository $ligaRepository)
    {
        $this->ligaRepository = $ligaRepository;
    }

    public function alleLigen()
    {
        return $this->ligaRepository->findAll();
    }
}