<?php


class Configuration
{
    /** Tableau des paramètres de configuration */
    private static $parametres;

    /**
     permet de rechercher la valeur d'un paramètre à partir de son nom. 
     Si le paramètre en question est trouvé dans le tableau associatif, sa valeur est renvoyée. 
     Sinon, une valeur par défaut est renvoyée.
     */
    public static function get($nom, $valeurParDefaut = null)
    {
        $parametres = self::getParametres();
        if (isset($parametres[$nom])) {
            $valeur = $parametres[$nom];
        }
        else {
            $valeur = $valeurParDefaut;
        }
        return $valeur;
    }

    /**
     * Renvoie le tableau des paramètres en le chargeant au besoin depuis un fichier de configuration.
     * Les fichiers de configuration recherchés sont Config/dev.ini et Config/prod.ini (dans cet ordre)
     * 
     * @return array Tableau des paramètres
     * @throws Exception Si aucun fichier de configuration n'est trouvé
     */
    private static function getParametres()
    {
        if (self::$parametres == null) {
            $cheminFichier = "Config/dev.ini";
            if (!file_exists($cheminFichier)) {
                $cheminFichier = "Config/prod.ini";
            }
            if (!file_exists($cheminFichier)) {
                throw new Exception("Aucun fichier de configuration trouvé");
            }
            else {
                self::$parametres = parse_ini_file($cheminFichier);
            }
        }
        return self::$parametres;
    }

}



