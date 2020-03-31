<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Jeux.php';

class ControleurCalendrier extends Controleur {

    private $billet;
    private $jeux;

    public function __construct() {
        $this->billet = new Billet();
        $this->jeux = new jeux();
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $billets = $this->billet->getBillets();
        $jeu = $this->jeux->getJeux();
        $this->genererVue(array('billets' => $billets, 'jeu' => $jeu));
    }

}

