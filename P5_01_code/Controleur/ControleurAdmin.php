<?php

require_once 'Framework/Controleur.php';
require_once 'ControleurSecurise.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Jeux.php';
require_once 'Modele/Contact.php';
require_once 'Modele/Information.php';
require_once 'Modele/Inscription.php';

/**
 * Contrôleur des actions d'administration
 *
 * @author Baptiste Pesquet
 */
class ControleurAdmin extends ControleurSecurise
{
    private $billet;
    private $commentaire;
    private $jeux;
    private $contact;
    private $information;
    private $inscription;
    
    /**
     * Constructeur 
     */
    public function __construct()
    {
        $this->billet = new Billet();
        $this->inscription = new Inscription();
        $this->jeux = new jeux();
        $this->contact = new Contact();
        $this->information = new information();
    }

    public function index()
    {
        $billets = $this->billet->getBillets();
        
        $contacts = $this->contact->getContacts();
        $jeu = $this->jeux->getJeux();
        $nbBillets = $this->billet->getNombreBillets();
        $inscriptions = $this->inscription->getInscriptions();
        $nbJeux = $this->jeux->getNombreJeux();
        $nbInformations = $this->information->getNombreInformations();
        $login = $this->requete->getSession()->getAttribut("login");
        $informations = $this->information->getInformations();
        $this->genererVue(array('nbBillets' => $nbBillets, 'nbInformations' => $nbInformations, 'nbJeux' => $nbJeux,'login' => $login, 'billets' => $billets,'contacts' => $contacts, 'jeu' => $jeu, 'informations' => $informations, 'inscriptions' => $inscriptions));
        
    }

    public function deletes()
    {
        $delBillet = $this->requete->getParametre("id");
        $this->billet->deleteBillets($delBillet);
        header('Location: http://localhost/JeuxSociete/admin'); 
        $this->executerAction("index");
    }
    
    public function deleteJeu()
    {
        $delJeu = $this->requete->getParametre("id");
        $this->jeux->deleteJeux($delJeu);
        header('Location: http://localhost/JeuxSociete/admin'); 
        $this->executerAction("index");
    }
    
    public function deleteContact()
    {
        $delContact = $this->requete->getParametre("id");
        $this->contact->deleteContacts($delContact);
        header('Location: http://localhost/JeuxSociete/admin'); 
        $this->executerAction("index");
    }
    
    public function deleteInformation()
    {
        $delInformation = $this->requete->getParametre("id");
        $this->information->deleteInformations($delInformation);
        header('Location: http://localhost/JeuxSociete/ainformation'); 
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

