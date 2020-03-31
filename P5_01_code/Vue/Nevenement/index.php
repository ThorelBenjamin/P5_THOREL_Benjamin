<div class="container px-3 py-3 pt-md-5 pb-md-2">
<form method="post" action="Nevenement/ajouter">
    <input id="titre" name="titre" class="form-control" type="text" placeholder="Titre du chapitre" required /> 
    <br/>
    <br/>
    <textarea id="texte" class="form-control" name="contenu" rows="5" cols="100" placeholder="texte" > </textarea><br />
    <input class="btn btn-light border" type="submit" value="Ajouter" />
</form>

<script src="https://cdn.tiny.cloud/1/q3w3qagm95xhiauehlauhv1b5plvoybrj07xq5k7m2e7yhpk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector:'textarea', 
            forced_root_block : false,
            force_br_newlines : true,
            force_p_newlines : false
                      
 });</script>

<script src="../../Contenu/javascript/tinymce.js"></script>
</div>