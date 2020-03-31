<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Information.php';


class ControleurInformations extends Controleur {

    private $information;


    public function __construct() {
        $this->information = new Information();
    }

    public function index() {
        $informations = $this->information->getInformations();
        $this->genererVue(array('informations' => $informations));
    }

}

