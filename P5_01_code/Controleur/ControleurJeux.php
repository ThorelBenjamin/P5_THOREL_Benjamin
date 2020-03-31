<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Jeux.php';

class ControleurJeux extends Controleur {

    private $jeux;

    public function __construct() {
        $this->jeux = new jeux();
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $jeu = $this->jeux->getJeux();
        $this->genererVue(array('jeu' => $jeu));
    }

}