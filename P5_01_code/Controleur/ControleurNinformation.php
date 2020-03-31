<?php

require_once 'Framework/Controleur.php';
require_once 'ControleurSecurise.php';
require_once 'Modele/Information.php';

class ControleurNinformation extends ControleurSecurise
{
    private $information;
    
    public function __construct()
    {
        $this->information = new information();
    }

    public function index()
    {
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('login' => $login));
    }
    
    // Ajoute une information
    public function ajouter() {
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        
        $this->information->ajouterinformations($titre, $contenu);
        header('Location: http://localhost/JeuxSociete/Ainformation');
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }

}