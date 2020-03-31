<?php

require_once 'Framework/Controleur.php';
require_once 'ControleurSecurise.php';
require_once 'Modele/Billet.php';

class ControleurNevenement extends ControleurSecurise
{
    private $billet;
    
    public function __construct()
    {
        $this->billet = new Billet();
    }

    public function index()
    {
        $nbBillets = $this->billet->getNombreBillets();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbBillets' => $nbBillets, 'login' => $login));
    }
    
    // Ajoute un billet
    public function ajouter() {
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        
        $this->billet->ajouterbillets($titre, $contenu);
        header('Location: http://localhost/JeuxSociete/admin/');
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }

}