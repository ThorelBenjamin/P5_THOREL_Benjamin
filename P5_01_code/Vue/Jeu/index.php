<?php $this->titre = "Mon Blog - " . $this->nettoyer($jeu['titre']); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-5">
            <div id="image_jeu" class="px-3 py-3 pt-md-5 pb-md-4">
                <img class="img-fluid" src="Contenu/images/<?= $this->nettoyer($jeu['titre']) ?>.jpg" alt="Couverture du jeu <?= $this->nettoyer($jeu['titre']) ?>">
            </div>
        </div>
        <div class="col-sm-6 col-md-7 col-lg-7">
                <h2 class="text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto"><?= $this->nettoyer($jeu['titre']) ?></h2>
                <h3>Description :</h3>
                <p><?= $this->nettoyer($jeu['regle']) ?></p>
                <p>Genre: 
                    <span class="badge badge-primary"><?= $this->nettoyer($jeu['genre']) ?></span>
                    <span class="badge badge-secondary"><?= $this->nettoyer($jeu['genre2']) ?></span>
                    <span class="badge badge-info"><?= $this->nettoyer($jeu['genre3']) ?></span>
                </p>
                <p>Lien pour plus d'information: <a href="<?= $this->nettoyer($jeu['lien']) ?>"><?= $this->nettoyer($jeu['lien']) ?></a></p>
        </div>
    </div>
    
    <h3 class="pt-md-5">Information général:</h3>
    <div class="px-1 py-1 pt-md-3 pb-md-2">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <p>Durée du jeu: <?= $this->nettoyer($jeu['duree']) ?></p>
                <p>Nombre de joueur minimum: <?= $this->nettoyer($jeu['nbjoueurmin']) ?></p>
                <p>Nombre de joueur maximum: <?= $this->nettoyer($jeu['nbjoueurmax']) ?></p>
                <p>Age minimum: <?= $this->nettoyer($jeu['age']) ?></p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <p>Auteur: <?= $this->nettoyer($jeu['auteur']) ?></p>
                <p>Illustrateur: <?= $this->nettoyer($jeu['illustrateur']) ?></p>    
                <p>Editeur: <?= $this->nettoyer($jeu['editeur']) ?></p>
                <p>Distributeur: <?= $this->nettoyer($jeu['distributeur']) ?></p>
            </div>
        </div>
    </div>
</div>