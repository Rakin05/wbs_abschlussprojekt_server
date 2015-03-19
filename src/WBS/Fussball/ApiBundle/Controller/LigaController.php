<?php

namespace WBS\Fussball\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LigaController extends Controller
{
    public function allAction($format)
    {
        $alleLigen = $this->get('liga.service')->getAlleLigen();
        $serializer = $this->get('jms_serializer');
        return new Response($serializer->serialize($alleLigen, $format));
    }

    public function showAction($format, $id)
    {
        $liga = $this->get('liga.service')->getLiga($id);

        if($liga == null)
            return new Response("Nicht gefunden",404);
        
        $serializer = $this->get('jms_serializer');
        return new Response($serializer->serialize($liga, $format));
    }

    public function createAction()
    {
        $ligaName = $this->get('request')->get('ligaName');
        $ligaLand = $this->get('request')->get('ligaLand');

        $this->get('liga.service')->createNew($ligaName, $ligaLand);
        
        return new Response("Liga erstellt", 200);
    }
}
