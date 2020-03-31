<?php

require_once 'Framework/Modele.php';

class Inscription extends Modele {

    public function getInscriptions() {
        $sql = 'select INS_ID as id, INS_DATE as date,'
                . ' INS_NOM as nom, INS_PRENOM as prenom,'
                . ' INS_EMAIL as email, INS_TEL as tel,'
                . ' INS_OPTION as choix, INS_NOTE as note from T_inscription'
                . ' order by INS_ID desc';
        $inscriptions = $this->executerRequete($sql);
        return $inscriptions;
    }

    public function getInscription($idInscription) {
        $sql = 'select INS_ID as id, INS_DATE as date,'
                . ' INS_NOM as nom, INS_PRENOM as prenom,'
                . ' INS_EMAIL as email, INS_TEL as tel,'
                . ' INS_OPTION as choix, INS_NOTE as not'
                . ' from T_INSCRIPTION'
                . ' where INS_ID=?';
        $inscription = $this->executerRequete($sql, array($idInscription));
        if ($inscription->rowCount() > 0)
            return $inscription->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucune inscription ne correspond à l'identifiant '$idInscription'");
    }

    public function getNombreInscriptions()
    {
        $sql = 'select count(*) as nbInscriptions from T_INSCRIPTION';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbInscriptions'];
    }
    
    public function ajouterInscriptions($nom, $prenom, $email, $tel, $choix, $note) 
    {
        $sql = 'INSERT INTO T_INSCRIPTION(INS_DATE, INS_NOM, INS_PRENOM, INS_EMAIL, INS_TEL, INS_OPTION, INS_NOTE)' 
                . ' values(NOW(), ?, ?, ?, ?, ?, ?)';
        $this->executerRequete($sql, array($nom, $prenom, $email, $tel, $choix, $note));
    }
    
    public function deleteInscriptions($idInscription)
    {
        $sql = 'DELETE FROM T_INSCRIPTION WHERE INS_ID = "'. $idInscription.'" ';
        $delete = $this->executerRequete($sql);
    }
    
}