<?php

namespace WBS\Fussball\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LigaController extends Controller
{
    public function allAction($format)
    {
        $alleLigen = $this->get('liga.service')->alleLigen();
        $serializer = $this->get('jms_serializer');
        return new Response($serializer->serialize($alleLigen, $format));
    }
}
