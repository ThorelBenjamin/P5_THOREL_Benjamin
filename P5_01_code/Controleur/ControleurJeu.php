<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Jeux.php';

class ControleurJeu extends Controleur {

    private $Jeux;


    public function __construct() {
        $this->jeux = new Jeux();
    }

 
    public function index() {
        $idJeu = $this->requete->getParametre("id");
        
        $jeu = $this->jeux->getJeu($idJeu);
        
        $this->genererVue(array('jeu' => $jeu));
    }
}
