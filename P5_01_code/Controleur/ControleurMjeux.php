<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Jeux.php';
require_once 'Modele/Commentaire.php';
require_once 'ControleurSecurise.php';

class ControleurMjeux extends ControleurSecurise 
{

    private $jeux;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->jeux = new jeux();
    }

    // Affiche les détails sur un billet
    public function index() {
        $idJeu = $this->requete->getParametre("id");
        $jeu = $this->jeux->getjeu($idJeu);
        
        $login = $this->requete->getSession()->getAttribut("login");
        
        $this->genererVue(array('jeu' => $jeu, 'login' => $login));
    }

    // Modifier un billet
    public function uptade() {
        
        $delJeu = $this->requete->getParametre("id");
        $this->jeux->deleteJeux($delJeu);
        
        $titre = $this->requete->getParametre("titre");
        $regle = $this->requete->getParametre("regle");
        $genre = $this->requete->getParametre("genre");
        $genre2 = $this->requete->getParametre("genre2");
        $genre3 = $this->requete->getParametre("genre3");
        $age = $this->requete->getParametre("age");
        $lien = $this->requete->getParametre("lien");
        $duree = $this->requete->getParametre("duree");
        $nbjoueurmax = $this->requete->getParametre("nbjoueurmax");
        $nbjoueurmin = $this->requete->getParametre("nbjoueurmin");
        $auteur = $this->requete->getParametre("auteur");
        $illustrateur = $this->requete->getParametre("illustrateur");
        $editeur = $this->requete->getParametre("editeur");
        $distributeur = $this->requete->getParametre("distributeur");
        
        $this->jeux->ajouterjeux($titre, $regle, $genre, $genre2, $genre3, $age, $lien, $duree, $nbjoueurmax, $nbjoueurmin, $auteur, $illustrateur, $editeur, $distributeur);
        header('Location: http://localhost/JeuxSociete/admin/');
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }
    

}

