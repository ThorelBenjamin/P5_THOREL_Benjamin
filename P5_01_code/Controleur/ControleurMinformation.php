<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Information.php';
require_once 'ControleurSecurise.php';

class ControleurMinformation extends ControleurSecurise 
{

    private $information;

    
    public function __construct() {
        $this->information = new Information();
    }

    
    public function index() {
        $idInformation = $this->requete->getParametre("id");
        $information = $this->information->getInformation($idInformation);
        $login = $this->requete->getSession()->getAttribut("login");
        
        $this->genererVue(array('information' => $information, 'login' => $login));
    }

    // Modifier un billet
    public function uptade() {
        
        $delInformation = $this->requete->getParametre("id");
        $this->information->deleteInformations($delInformation);
        
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        
        $this->information->ajouterinformations($titre, $contenu);
        header('Location: http://localhost/JeuxSociete/admin/'); 
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }
    

}

