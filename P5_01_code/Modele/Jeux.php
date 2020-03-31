<?php

require_once 'Framework/Modele.php';


class Jeux extends Modele {

    
    public function getJeux() {
        $sql = 'select jeux_id as id, '
                . ' jeux_titre as titre, jeux_regle as regle, '
                . ' jeux_genre as genre, jeux_genre_2 as genre2,'
                . ' jeux_genre_3 as genre3, jeux_duree as duree, '
                . ' jeux_nbjoueurmax as nbjoueurmax, jeux_nbjoueurmin as nbjoueurmin, '
                . ' jeux_age as age, jeux_lien as lien, '
                . ' jeux_auteur as auteur, jeux_illustrateur as illustrateur, '
                . ' jeux_editeur as editeur, jeux_distributeur as distributeur from T_JEUX'
                . ' order by jeux_id desc ';
        $jeux = $this->executerRequete($sql);
        return $jeux;
    }

    
    public function getJeu($idJeu) {
        $sql = 'select jeux_id as id, '
                . ' jeux_titre as titre, jeux_regle as regle, '
                . ' jeux_genre as genre, jeux_genre_2 as genre2, '
                . ' jeux_genre_3 as genre3, jeux_duree as duree, '
                . ' jeux_nbjoueurmax as nbjoueurmax, jeux_nbjoueurmin as nbjoueurmin, '
                . ' jeux_age as age, jeux_lien as lien, '
                . ' jeux_auteur as auteur, jeux_illustrateur as illustrateur, '
                . ' jeux_editeur as editeur, jeux_distributeur as distributeur from T_JEUX'
                . ' where jeux_id=?';
        $jeu = $this->executerRequete($sql, array($idJeu));
        if ($jeu->rowCount() > 0)
            return $jeu->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun jeu ne correspond à l'identifiant '$idJeu'");
    }
          
    public function getNombreJeux()
    {
        $sql = 'select count(*) as nbJeux from T_JEUX';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbJeux'];
    }
    
    
    
    public function ajouterJeux($titre, $regle, $genre, $genre2, $genre3, $age, $lien, $duree, $nbjoueurmax, $nbjoueurmin, $auteur, $illustrateur, $editeur, $distributeur) 
    {
        $sql = 'INSERT INTO T_JEUX(jeux_titre, jeux_regle, jeux_genre, jeux_genre_2, jeux_genre_3, jeux_age, jeux_lien, jeux_duree, jeux_nbjoueurmax, jeux_nbjoueurmin, jeux_auteur, jeux_illustrateur, jeux_editeur, jeux_distributeur)' 
                . ' values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $this->executerRequete($sql, array($titre, $regle, $genre, $genre2, $genre3, $age, $lien, $duree, $nbjoueurmax, $nbjoueurmin, $auteur, $illustrateur, $editeur, $distributeur));
    }
    
    public function deleteJeux($idJeu)
    {
        $sql = 'DELETE FROM T_JEUX WHERE jeux_id = "'. $idJeu .'" ';
        $delete = $this->executerRequete($sql);
    }
    
}