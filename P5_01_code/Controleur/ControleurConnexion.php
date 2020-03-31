<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Utilisateur.php';


class ControleurConnexion extends Controleur
{
    private $utilisateur;

    public function __construct()
    {
        $this->utilisateur = new Utilisateur();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function connecter()
    {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            if (password_verify($_POST['mdp'], '$2y$10$Uy7e6kBjR.FsyOVrY7FdxebMM4NNFWc9f2R1VDN2gI5u1FQv3HYSq')){
                    $mdp = '$2y$10$Uy7e6kBjR.FsyOVrY7FdxebMM4NNFWc9f2R1VDN2gI5u1FQv3HYSq';
                    if ($this->utilisateur->connecter($login, $mdp)) {
                        $utilisateur = $this->utilisateur->getUtilisateur($login, $mdp);
                        $this->requete->getSession()->setAttribut("idUtilisateur",
                                $utilisateur['idUtilisateur']);
                        $this->requete->getSession()->setAttribut("login",
                                $utilisateur['login']);
                        $this->rediriger("admin");
                    }
                    else
                        $this->genererVue(array('msgErreur' => 'Idantifiant inconnu.'),
                                "index");
                    }
            else 
                $this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects'),
                                "index");
        }
        else
            throw new Exception("Action impossible : login ou mot de passe non défini");
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }

}
