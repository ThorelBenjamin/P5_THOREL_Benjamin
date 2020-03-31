<?php

require_once 'Framework/Modele.php';


class Contact extends Modele {


    public function getContacts() {
        $sql = 'select MESS_ID as id, MESS_NOM as nom,'
                . ' MESS_PRENOM as prenom, MESS_EMAIL as email,'
                . ' MESS_TITRE as titre, MESS_CONTENU as contenu from T_CONTACT'
                . ' order by MESS_ID desc';
        $contacts = $this->executerRequete($sql);
        return $contacts;
    }

    public function getContact($idContact) {
        $sql = 'select MESS_ID as id, MESS_NOM as nom,'
                . ' MESS_PRENOM as prenom, MESS_EMAIL as email,'
                . ' MESS_TITRE as titre, MESS_CONTENU as contenu from T_CONTACT'
                . ' where MESS_ID=?';
        $contact = $this->executerRequete($sql, array($idContact));
        if ($contact->rowCount() > 0)
            return $contact->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun message ne correspond à l'identifiant '$idContact'");
    }
    
    public function getNombreContacts()
    {
        $sql = 'select count(*) as nbContacts from T_CONTACT';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  
        return $ligne['nbContacts'];
    }
    
    public function ajouterContacts($nom, $prenom, $email, $titre, $contenu) 
    {
        $sql = 'INSERT INTO T_CONTACT(MESS_NOM, MESS_PRENOM, MESS_EMAIL, MESS_TITRE, MESS_CONTENU)' 
                . ' values(?, ?, ?, ?, ?)';
        $this->executerRequete($sql, array($nom, $prenom, $email, $titre, $contenu));
    }
    
    public function deleteContacts($idContact)
    {
        $sql = 'DELETE FROM T_CONTACT WHERE MESS_ID = "'. $idContact.'" ';
        $delete = $this->executerRequete($sql);
    }
}