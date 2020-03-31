<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Inscription.php';
require_once 'Modele/Billet.php';

class ControleurInscription extends Controleur
{
    private $inscription;
    private $billet;
    
    
    public function __construct()
    {
        $this->inscription = new Inscription();
        $this->billet = new Billet();
    }

    
    public function index()
    {
        $billets = $this->billet->getBillets();
        $inscriptions = $this->inscription->getInscriptions();
        $this->genererVue(array('inscriptions' => $inscriptions, 'billets' => $billets));
    }
    
    public function ajouter() {
        $nom = $this->requete->getParametre("nom");
        $prenom = $this->requete->getParametre("prenom");
        $email = $this->requete->getParametre("email");
        $tel = $this->requete->getParametre("tel");
        $choix = $this->requete->getParametre("choix");
        $note = $this->requete->getParametre("note");
        
        
        $this->inscription->ajouterInscriptions($nom, $prenom, $email, $tel, $choix, $note);
        header('Location: http://localhost/JeuxSociete/accueil/');
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }
    
    public function deleteInscription()
    {
        $delInscription = $this->requete->getParametre("id");
        $this->inscription->deleteInscriptions($delInscription);
        header('Location: http://localhost/JeuxSociete/admin'); 
        $this->executerAction("index");
    }
}