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

    public function createAction()
    {
        $ligaId = $this->get('request')->get('ligaId');
        $saisonStart = $this->get('request')->get('saisonStart');
        $saisonEnde = $this->get('request')->get('saisonEnde');

        $this->get('liga_saison.service')->createNew($ligaId, $saisonStart, $saisonEnde);
        
        return new Response("Saison erstellt", 200);
    }
}
