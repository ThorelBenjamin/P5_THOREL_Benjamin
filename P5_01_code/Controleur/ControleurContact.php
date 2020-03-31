<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Contact.php';
require_once 'Modele/Commentaire.php';


class ControleurContact extends Controleur {

    private $contact;
    private $commentaire;

    /**
     * Constructeur 
     */
    public function __construct()
    {
        $this->contact = new Contact();
        $this->commentaire = new Commentaire();
    }

    public function index()
    {
        $contacts = $this->contact->getContacts();
        $nbContacts = $this->contact->getNombreContacts();
        $this->genererVue(array('contacts' => $contacts, 'nbContacts' => $nbContacts));
    }
    
    public function ajouter() {
        $nom = $this->requete->getParametre("nom");
        $prenom = $this->requete->getParametre("prenom");
        $email = $this->requete->getParametre("email");
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        
        $this->contact->ajoutercontacts($nom, $prenom, $email, $titre, $contenu);
        header('Location: http://localhost/JeuxSociete/contact');
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }
}