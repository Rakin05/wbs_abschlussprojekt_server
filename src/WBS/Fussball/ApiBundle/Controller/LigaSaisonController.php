<?php

namespace WBS\Fussball\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LigaSaisonController extends Controller
{
    public function allAction($format)
    {
        $alleSaisons = $this->get('liga_saison.service')->getAlleSaisons();
        $serializer = $this->get('jms_serializer');
        return new Response($serializer->serialize($alleSaisons, $format));
    }

    public function showAction($format, $id)
    {
        $ligaSaison = $this->get('liga_saison.service')->getSaison($id);

        if($ligaSaison == null)
            return new Response("Nicht gefunden",404);
        
        $serializer = $this->get('jms_serializer');
        return new Response($serializer->serialize($ligaSaison, $format));
    }

    // public function createAction()
    // {
    //     $ligaName = $this->get('request')->get('ligaName');
    //     $ligaLand = $this->get('request')->get('ligaLand');

    //     $this->get('liga.service')->createNew($ligaName, $ligaLand);
        
    //     return new Response("Liga erstellt", 200);
    // }
}
