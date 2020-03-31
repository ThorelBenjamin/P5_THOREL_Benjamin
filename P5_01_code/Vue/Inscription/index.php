<?php $this->titre = "Inscription événement"; ?>
  
<div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Inscrivez-vous</h2>
    <p class="text-center w-responsive mx-auto mb-5 lead">Inscrivez-vous via le formulaire ci dessous à l'événement pour pouvoir prendre contact avec le staff de l'événement.</p>
    
    <div class="row shadow-sm p-3 mb-3 bg-white rounded">
            
        

        <div class="container px-3 py-3 pt-md-5 pb-md-2">
            <form method="post" action="Inscription/ajouter">
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-3">
                            <input type="text" placeholder="Votre Nom" id="nom" name="nom" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-3">
                            <input type="text" id="prenom" placeholder="Votre Prenom" name="prenom" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-3">
                            <input type="email" id="email" name="email" placeholder="Votre email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-3">
                            <input type="tel" id="tel" placeholder="Votre téléphone" name="tel" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-3">
                            <select class="custom-select" name="choix" size="1">
                                <option selected>Choisir un événement</option>
                                <?php foreach ($billets as $billet): ?>
                                    <option> <h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1> </option>
                                <?php endforeach; ?>
                                
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="note" name="note" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Votre message</label>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-light border" value="Ajouter" />
            </form>
            </div>
        </div>
    
</div>
