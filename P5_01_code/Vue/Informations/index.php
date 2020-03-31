<h2 class="text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto"><i class="fas fa-info-circle"></i> Information</h2>

<?php foreach ($informations as $information): ?>
    <div class="container">
         <a href="<?= "information/index/" . $this->nettoyer($information['id']) ?>">
             <h3 class="titreBillet"><?= $this->nettoyer($information['titre']) ?></h3>
        </a>
        <p><?= $this->nettoyer($information['contenu']) ?></p>
        <p class="text-right">Ajoutée le: <?= $this->nettoyer($information['date']) ?></p>
        <hr>
    </div>
<?php endforeach; ?>