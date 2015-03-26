<?php

namespace WBS\Fussball\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SpielController extends Controller
{
    public function allAction($format)
    {
        $alleSpiele = $this->get('spiele.service')->getAlleSPiele();
        $serializer = $this->get('jms_serializer');
        return new Response($serializer->serialize($alleSpiele, $format));
    }

    public function showAction($format, $id)
    {
        $spiel = $this->get('spiele.service')->getSpiel($id);

        if($spiel == null)
            return new Response("Nicht gefunden",404);
        
        $serializer = $this->get('jms_serializer');
        return new Response($serializer->serialize($spiel, $format));
    }

    public function createAction()
    {
        $ligaSaisonId = $this->get('request')->get('ligaSaisonId');
        $heimVereinId = $this->get('request')->get('heimVereinId');
        $gastVereinId = $this->get('request')->get('gastVereinId');
        $heimTore = $this->get('request')->get('heimTore');
        $gastTore = $this->get('request')->get('gastTore');
        $spielTag = $this->get('request')->get('spielTag');
        
        $this->get('spiele.service')->createNewSpiel($ligaSaisonId, $heimVereinId, $gastVereinId, $heimTore, $gastTore, $spielTag);
        
        return new Response("Spiel erstellt", 200);
    }
}