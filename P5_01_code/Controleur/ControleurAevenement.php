<?php

require_once 'Framework/Controleur.php';
require_once 'ControleurSecurise.php';
require_once 'Modele/Billet.php';


class ControleurAevenement extends ControleurSecurise
{
    private $billet;
    

    public function __construct()
    {
        $this->billet = new Billet();

    }

    public function index()
    {
        $billets = $this->billet->getBillets();
        $nbBillets = $this->billet->getNombreBillets();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbBillets' => $nbBillets, 'login' => $login, 'billets' => $billets));
        
    }

    public function deletes()
    {
        $delBillet = $this->requete->getParametre("id");
        $this->billet->deleteBillets($delBillet);
        header('Location: http://localhost/JeuxSociete/aevenement'); 
        $this->executerAction("index");
    }

}

