<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Information.php';


class ControleurInformation extends Controleur {

    private $information;


    public function __construct() {
        $this->information = new Information();
    }

    public function index() {
        $idInformation = $this->requete->getParametre("id");
        $information = $this->information->getInformation($idInformation);
        
        $this->genererVue(array('information' => $information));
    }

}
