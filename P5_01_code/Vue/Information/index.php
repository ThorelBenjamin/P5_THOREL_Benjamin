<h2 class="text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto"><?= $this->nettoyer($information['titre']) ?></h2>

<div class="container">
    <p><?= $this->nettoyer($information['contenu']) ?></p>
    <p class="text-right">Ajoutée le : <?= $this->nettoyer($information['date']) ?></p>
</div>
