<?php

require_once 'Framework/Controleur.php';
require_once 'ControleurSecurise.php';
require_once 'Modele/Information.php';

class ControleurAinformation extends ControleurSecurise
{

    private $information;
    

    public function __construct()
    {
        $this->information = new Information();
    }

    public function index()
    {

        $informations = $this->information->getInformations();

        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('login' => $login, 'informations' => $informations));
        
    }

    public function deleteInformation()
    {
        $delInformation = $this->requete->getParametre("id");
        $this->information->deleteInformations($delInformation);
        header('Location: http://localhost/JeuxSociete/ainformation'); 
        $this->executerAction("index");
    }
}

