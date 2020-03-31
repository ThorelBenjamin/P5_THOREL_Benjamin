<div class="container px-3 py-3 pt-md-5 pb-md-2">
<form method="post" action="Mjeux/uptade">
    <p>Titre du jeu:</p><input id="titre" class="form-control" name="titre" type="text" value="<?= $this->nettoyer($jeu['titre']) ?>" required />
    <p>age :</p> <input id="age" name="age" type="number" value="<?= $this->nettoyer($jeu['age']) ?>" min="1" max="100" class="form-control" required />
    <p>Durée :</p> <input id="duree" class="form-control" name="duree" type="number" value="<?= $this->nettoyer($jeu['duree']) ?>" min="5" max="900" required />
    <p>Nombre de joueur maximum :</p> <input id="nbjoueurmax" class="form-control" name="nbjoueurmax"  type="number" value="<?= $this->nettoyer($jeu['nbjoueurmax']) ?>" required /> 
    <p>Nombre de joueur minimum :</p> <input id="nbjoueurmin" class="form-control" name="nbjoueurmin"  type="number" value="<?= $this->nettoyer($jeu['nbjoueurmin']) ?>" min="1" max="16" required />
    <p>Tag du jeux :</p>
    <select class="browser-default custom-select mb-2" id="genre" name="genre">
        <option><?= $this->nettoyer($jeu['genre']) ?></option>
        <option>Ambiance</option>
        <option>Coopératifs</option>
        <option>Familliale</option>
        <option>Hasard</option>
        <option>Jeux de rôle</option>
        <option>Réflexion</option>
        <option>Stratégie</option>
        <option>Trahison</option>
    </select>
    <p>Tag du jeux numéro 2:</p>
    <select class="browser-default custom-select mb-2" id="genre2" name="genre2">
        <option><?= $this->nettoyer($jeu['genre2']) ?></option>
        <option>Ambiance</option>
        <option>Coopératifs</option>
        <option>Familliale</option>
        <option>Hasard</option>
        <option>Jeux de rôle</option>
        <option>Réflexion</option>
        <option>Stratégie</option>
        <option>Trahison</option>
    </select>
    <p>Tag du jeux numéro 3:</p>
    <select class="browser-default custom-select mb-2" id="genre3" name="genre3">
        <option><?= $this->nettoyer($jeu['genre3']) ?></option>
        <option>Ambiance</option>
        <option>Coopératifs</option>
        <option>Familliale</option>
        <option>Hasard</option>
        <option>Jeux de rôle</option>
        <option>Réflexion</option>
        <option>Stratégie</option>
        <option>Trahison</option>
    </select>
    <p>Lien du jeu:</p><input id="lien" class="form-control" name="lien" type="text" value="<?= $this->nettoyer($jeu['lien']) ?>" />
    <p>Nom de l'auteur:</p><input id="auteur" class="form-control" name="auteur" type="text" value="<?= $this->nettoyer($jeu['auteur']) ?>" />
    <p>Nom de l'illustrateur:</p><input id="illustrateur" class="form-control" name="illustrateur" type="text" value="<?= $this->nettoyer($jeu['illustrateur']) ?>" />
    <p>Nom de l'éditeur:</p><input id="editeur" class="form-control" name="editeur" type="text" value="<?= $this->nettoyer($jeu['editeur']) ?>" />
    <p>Nom du distributeur:</p><input id="distributeur" class="form-control" name="distributeur" type="text" value="<?= $this->nettoyer($jeu['distributeur']) ?>" />
    <br/>
    <br/>
    <textarea id="texte" name="regle" rows="5" cols="100" placeholder="texte" ><?= $this->nettoyer($jeu['regle']) ?></textarea><br />
        
    <input type="hidden" name="id" value="<?= $jeu['id'] ?>" />
    <input type="submit" class="btn btn-light border" value="Ajouter" />
</form>
</div>

<script src="https://cdn.tiny.cloud/1/q3w3qagm95xhiauehlauhv1b5plvoybrj07xq5k7m2e7yhpk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector:'textarea', 
            forced_root_block : false,
            force_br_newlines : true,
            force_p_newlines : false
                      
 });</script>

<script src="../../Contenu/javascript/tinymce.js"></script>