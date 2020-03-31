<?php $this->titre = "Mon Blog"; ?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center container">
        <h1 class="display-4">Club jeu de société</h1>
        <p class="lead">Nous sommes un club de jeu de société, baser à Royan et c'est alentour. Vous pouvez retrouver toutes les informations sur les jeux, les sessions, les événements sur ce site. Pour plus d'information vous pouvez nous contacter <a href="http://localhost/JeuxSociete/contact">ici</a>.</p>
    </div>


<div>
    <div class="container">
        <div class="row">
            <div class="px-3 py-3 pt-md-5 pb-md-2 mx-auto col-sm-6 col-md-6 col-lg-4 header-item">
                
                <?php foreach ($billets as $billet):    ?>
                    <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
                        <h3 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h3>
                    </a>
                <p class=""><?= $this->nettoyer($billet['contenu']) ?></p>
                <a class="btn btn-outline-light" role="button" href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">Voir</a>
                <?php endforeach; ?>

            </div>

            <div class="px-3 py-3 pt-md-5 pb-md-2 mx-auto col-sm-6 col-md-6 col-lg-4 header-item">
                <?php 
                    $i = 0;
                    foreach ($jeu as $jeux): ?>  
                        <div id="nbchar">
                            <a href="<?= "jeu/index/" . $this->nettoyer($jeux['id']) ?>">
                                <h3 class="titreJeux"><?= $this->nettoyer($jeux['titre']) ?></h3>
                            </a>
                            <p class="text_couper"><?= $this->nettoyer($jeux['regle']) ?></p>
                        </div> 
                <?php $i++; // Boucle numéro...
                    if ($i === 1) { break; } // On arrête à la 1éme boucle ?>        
                <?php endforeach; ?>
            </div>

            <div class="px-3 py-3 pt-md-5 pb-md-2 mx-auto col-sm-6 col-md-6 col-lg-4 header-item">
                <?php foreach ($informations as $information): ?>  
                        <a href="<?= "information/index/" . $this->nettoyer($information['id']) ?>">
                            <h3><?= $this->nettoyer($information['titre']) ?></h3>
                        </a>
                        <p class=""><?= $this->nettoyer($information['contenu']) ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="responsiveCal">
            <a href="http://localhost/JeuxSociete/Calendrier"><h3>Calendrier</h3></a>
                <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FParis&amp;src=djhzZmVpajNwYm80czd0bDl0NTJpaTJudnNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23795548&amp;mode=AGENDA&amp;showTitle=0&amp;showDate=1&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0" style="border-width:0" width="600" height="250" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
</div>