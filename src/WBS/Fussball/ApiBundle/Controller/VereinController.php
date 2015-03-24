<?php

namespace WBS\Fussball\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class VereinController extends Controller
{
    public function allAction($format)
    {
        $alleVereine = $this->get("vereine.service")->getAlleVereine();
        $serializer = $this->get('jms_serializer');

        return new Response($serializer->serialize($alleVereine, $format));
    }
}
