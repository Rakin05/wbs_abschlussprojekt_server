<?php

namespace WBS\Fussball\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SpielerController extends Controller
{
    public function allAction($format)
    {
        $alleSpieler = $this->get('spieler.service')->getAlleSPieler();
        $serializer = $this->get('jms_serializer');
        return new Response($serializer->serialize($alleSpieler, $format));
    }

    public function showAction($format, $id)
    {
        $spieler = $this->get('spieler.service')->getSpieler($id);

        if($spieler == null)
            return new Response("Nicht gefunden",404);
        
        $serializer = $this->get('jms_serializer');
        return new Response($serializer->serialize($spieler, $format));
    }

    public function createAction()
    {
        $vereinsId = $this->get('request')->get('vereinsId');
        $spielerName = $this->get('request')->get('spielerName');

        $this->get('spieler.service')->createNewSpieler($vereinsId, $spielerName);
        
        return new Response("Liga erstellt", 200);
    }
}
