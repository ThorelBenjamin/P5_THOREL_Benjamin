<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Jeux.php';
require_once 'Modele/Information.php';

class ControleurAccueil extends Controleur {

    private $billet;
    private $jeux;
    private $Information;
    
    public function __construct() {
        $this->billet = new Billet();
        $this->jeux = new jeux();
        $this->information = new information();
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $billets = $this->billet->getBillets();
        $jeu = $this->jeux->getJeux();
        $informations = $this->information->getInformations();
        $this->genererVue(array('billets' => $billets, 'jeu' => $jeu, 'informations' => $informations));
    }

}

