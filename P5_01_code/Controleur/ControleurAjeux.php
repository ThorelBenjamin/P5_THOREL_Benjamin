<?php

require_once 'Framework/Controleur.php';
require_once 'ControleurSecurise.php';
require_once 'Modele/Jeux.php';


class ControleurAjeux extends ControleurSecurise
{
    private $jeux;
    
    public function __construct()
    {
        $this->jeux = new jeux();
    }

    public function index()
    {
        $jeu = $this->jeux->getJeux();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('login' => $login, 'jeu' => $jeu));
        
    }

    
    public function deleteJeu()
    {
        $delJeu = $this->requete->getParametre("id");
        $this->jeux->deleteJeux($delJeu);
        header('Location: http://localhost/JeuxSociete/ajeux'); 
        $this->executerAction("index");
    }

}

