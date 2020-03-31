<?php

require_once 'Framework/Controleur.php';
require_once 'ControleurSecurise.php';
require_once 'Modele/Contact.php';

class ControleurAcontact extends ControleurSecurise
{

    private $contact;
    

    public function __construct()
    {
        $this->contact = new Contact();
    }

    public function index()
    {

        $contacts = $this->contact->getContacts();
        $login = $this->requete->getSession()->getAttribut("login");
        $nbContacts = $this->contact->getNombreContacts();
        $this->genererVue(array('login' => $login, 'contacts' => $contacts, 'nbContacts' => $nbContacts));
        
    }

    public function deleteContact()
    {
        $delContact = $this->requete->getParametre("id");
        $this->contact->deleteContacts($delContact);
        header('Location: http://localhost/JeuxSociete/acontact'); 
        $this->executerAction("index");
    }
}

