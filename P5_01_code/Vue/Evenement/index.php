<?php $this->titre = "Evenement"; ?>

<div class="col-mg-12 ">
    <h2 class="text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto"><i class="fas fa-users"></i> Evenement</h2>
</div>

 <?php foreach ($billets as $billet): ?>
    <div class="container">
        <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>"> 
            <h3 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h3>
        </a>
        <p class="lead"><?= $this->nettoyer($billet['contenu']) ?></p>
        <p class="text-right">Le : <?= $this->nettoyer($billet['date']) ?></p>
        <a class="btn btn-outline-primary border" role="button" aria-pressed="true" href="http://localhost/JeuxSociete/inscription">S'inscrire</a>
        <hr>
    </div>
<?php endforeach; ?> 