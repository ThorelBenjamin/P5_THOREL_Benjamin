<?php $this->titre = "Mon Blog"; ?>

    <h2 class="text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto"><i class="fas fa-gamepad"></i> Jeux disponibles </h2>
    <?php foreach ($jeu as $jeux): ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 header-item">
                    <div id="image_jeux">
                        <img class="img-fluid" src="Contenu/images/<?= $this->nettoyer($jeux['titre']) ?>.jpg" alt="Couverture du jeu <?= $this->nettoyer($jeux['titre']) ?>">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 header-item">
                   <div id="jeux_container">
                        <a href="<?= "jeu/index/" . $this->nettoyer($jeux['id']) ?>">
                            <h3 class="titreBillet"><?= $this->nettoyer($jeux['titre']) ?></h3>
                        </a>
                        <p><?= $this->nettoyer($jeux['regle']) ?></p>
                        <p>Genre : 
                            <span class="badge badge-primary"><?= $this->nettoyer($jeux['genre']) ?></span>
                            <span class="badge badge-secondary"><?= $this->nettoyer($jeux['genre2']) ?></span>
                            <span class="badge badge-info"><?= $this->nettoyer($jeux['genre3']) ?></span>
                        </p>
                        <a href="<?= $this->nettoyer($jeux['lien']) ?>"> <?= $this->nettoyer($jeux['lien']) ?> </a>
                        <p> De : <?= $this->nettoyer($jeux['nbjoueurmin']) ?> a <?= $this->nettoyer($jeux['nbjoueurmax']) ?> joueur</p>
                   </div>
                </div>
            </div>
        </div>
        <br/>
    <?php endforeach; ?>