<?php

require_once 'Framework/Modele.php';

class Information extends Modele {

    public function getInformations() {
        $sql = 'select INF_ID as id, INF_DATE as date,'
                . ' INF_TITRE as titre, INF_CONTENU as contenu from T_INFORMATION'
                . ' order by INF_ID desc';
        $informations = $this->executerRequete($sql);
        return $informations;
    }

    public function getInformation($idInformation) {
        $sql = 'select INF_ID as id, INF_DATE as date,'
                . ' INF_TITRE as titre, INF_CONTENU as contenu from T_INFORMATION'
                . ' where INF_ID=?';
        $information = $this->executerRequete($sql, array($idInformation));
        if ($information->rowCount() > 0)
            return $information->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucune information ne correspond à l'identifiant '$idInformation'");
    }

    public function getNombreInformations()
    {
        $sql = 'select count(*) as nbInformations from T_INFORMATION';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbInformations'];
    }
    
    public function ajouterInformations($titre, $contenu) 
    {
        $sql = 'INSERT INTO T_Information(INF_DATE, INF_TITRE, INF_CONTENU)' 
                . ' values(NOW(), ?, ?)';
        $this->executerRequete($sql, array($titre, $contenu));
    }
    
    public function deleteInformations($idInformation)
    {
        $sql = 'DELETE FROM T_INFORMATION WHERE INF_ID = "'. $idInformation.'" ';
        $delete = $this->executerRequete($sql);
    }
    
}