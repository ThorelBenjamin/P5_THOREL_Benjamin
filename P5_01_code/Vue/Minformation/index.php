<div class="container px-3 py-3 pt-md-5 pb-md-2">
    <form method="post" action="Minformation/uptade">
        <input id="titre" class="form-control" name="titre" type="text" placeholder="Titre du chapitre" value="<?= $this->nettoyer($information['titre']) ?>" required /> 
        <br/>
        <br/>
        <textarea id="texte" name="contenu" rows="5" cols="100" placeholder="texte" ><?= $this->nettoyer($information['contenu']) ?></textarea><br />
        <input type="hidden" name="id" value="<?= $information['id'] ?>" />
        <input type="submit" class="btn btn-light border" value="uptade" />
    </form>
</div>
<script src="https://cdn.tiny.cloud/1/q3w3qagm95xhiauehlauhv1b5plvoybrj07xq5k7m2e7yhpk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector:'textarea', 
            forced_root_block : false,
            force_br_newlines : true,
            force_p_newlines : false
                      
 });</script>

<script src="../../Contenu/javascript/tinymce.js"></script>