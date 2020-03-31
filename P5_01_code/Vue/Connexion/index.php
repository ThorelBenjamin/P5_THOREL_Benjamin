<?php $this->titre = "Mon Blog - Connexion" ?>


<div class="container text-center" id="border_connexion">
    <div id="">
        <h2 class="px-3 pb-4 mb-0">Connection</h2>
        <form action="connexion/connecter" method="post">
            <input name="login" type="text" placeholder="Entrez votre login" class="form-control btnconnection mb-2" required autofocus>
            <input id="mdp" name="mdp" type="password" class="form-control btnconnection mb-3" placeholder="Entrez votre mot de passe" required>
            <button type="submit" class="btn btn-light">Connexion</button>
        </form>
    </div>

    <div>
        <?php if (isset($msgErreur)): ?>
        <p><?= $msgErreur ?></p>
        <?php endif; ?>
    </div>
</div>