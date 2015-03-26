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

    // public function createAction()
    // {
    //     $vereinsId = $this->get('request')->get('vereinsId');
    //     $spielerName = $this->get('request')->get('spielerName');

    //     $this->get('spieler.service')->createNewSpieler($vereinsId, $spielerName);
        
    //     return new Response("Spieler erstellt", 200);
    // }
}