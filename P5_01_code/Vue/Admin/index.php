<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2 pt-3">
            <div class="bg-white">
                <div class="py-4 px-3 mb-4 bg-light">
                    <div class="media d-flex align-items-center">
                        <a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a>
                    </div>
                </div>
                <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0">Jeu</p>
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Njeux">
                           <i class="fas fa-plus-circle"></i>  Ajouter un nouveau jeu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Ajeux">
                           <i class="fas fa-cog"></i> Modéré les jeux
                        </a>
                    </li>
                </ul>
                <br>
                <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0">Evénement</p>
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Nevenement">
                            <i class="fas fa-plus-circle"></i>  Ajouter un nouveau événement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Aevenement">
                           <i class="fas fa-cog"></i> Modéré les événements
                        </a>
                    </li>
                </ul>
                <br>
                <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0">Information</p>
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Ninformation">
                            <i class="fas fa-plus-circle"></i>  Ajouter une nouvelle information
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Ainformation">
                           <i class="fas fa-cog"></i> Modéré les informations
                        </a>
                    </li>
                </ul>
                <br>
                <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0">Contact</p>
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Acontact">
                           <i class="fas fa-cog"></i> Modéré les demandes de contact
                        </a>
                    </li>
                </ul>
                <br>
            </div>
        </div>

        <div class="col-sm-10 col-md-10 col-lg-10 pt-5">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal text-center"><i class="far fa-sticky-note"></i> Inscription au événement</h4>
                    </div>
                    <div class="card-body">
                         <?php foreach ($inscriptions as $inscription): ?>
                            <p class="card-title pricing-card-title ">Inscription a : <?= $this->nettoyer($inscription['choix']) ?></p>
                            <p class="card-text">Nom et prenom : <?= $this->nettoyer($inscription['nom']) ?> <?= $this->nettoyer($inscription['prenom']) ?></p>
                            <p class="small"> Joindre à l'email : <?= $this->nettoyer($inscription['email']) ?> et au téléphone : 0<?= $this->nettoyer($inscription['tel']) ?> </p>
                            
                        <form method="post" action="admin/deleteInscription">
                            <input type="hidden" name="id" value="<?= $inscription['id'] ?>" />
                            <input type="submit" name="supprimer" value="supprimer" class="btn btn-outline-danger btn-sm" />
                        </form>
                        <hr/>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
            
            <div class="container pt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal text-center"><i class="fas fa-envelope-open-text"></i> Dernier message</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($contacts as $contact): ?>
                            <h5 class="card-title pricing-card-title pt-2"><strong class="d-block text-gray-dark"><?= $this->nettoyer($contact['titre']) ?></strong></h5>
                            <h6 class="small"><?= $this->nettoyer($contact['email']) ?></h6>
                            <p class="card-text pl-5 pt-3"><?= $this->nettoyer($contact['contenu']) ?></p>
                            <p class="text-right">de <?= $this->nettoyer($contact['nom']) ?> <?= $this->nettoyer($contact['prenom']) ?></p>
                            <small class="d-block text-center mt-3"><a href="http://localhost/JeuxSociete/Acontact">Tout voir</a></small>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div class="container pt-5">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><i class="fas fa-gamepad"></i> Dernier jeux</h4>
                        </div>
                        <div class="card-body">
                            <?php 
                                $i = 0;
                            foreach ($jeu as $jeux): ?>
                            <h3 class="card-title pricing-card-title pt-2"><strong class="d-block text-gray-dark"><?= $this->nettoyer($jeux['titre']) ?></strong></h3>
                                <div class="media text-muted pt-3">
                                    <div class="media-body pb-1 mb-0 small lh-125 border-bottom border-gray ">
                                        <p><?= $this->nettoyer($jeux['regle']) ?>"</p>
                                    </div>
                                </div>
                            <small class="d-block text-right mt-3"><a href="http://localhost/JeuxSociete/ajeux">Tout voir</a></small>
                            <?php $i++; // Boucle numéro...
                                        if ($i === 2) { break; } // On arrête à la 2éme boucle ?>
                            <?php endforeach; ?> 
                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><i class="fas fa-users"></i> Dernier événement</h4>
                        </div>
                        <div class="card-body">
                            <?php
                                $i = 0;
                                foreach ($billets as $billet): ?>
                                    <h3 class="card-title pricing-card-title"><strong class="d-block text-gray-dark"><?= $this->nettoyer($billet['titre']) ?></strong></h3>
                                    <div class="media text-muted pt-3">
                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                            "<?= $this->nettoyer($billet['contenu']) ?>"
                                        </p>
                                    </div>
                                    <small class="d-block text-right mt-3"><a href="http://localhost/JeuxSociete/Aevenement">Tout voir</a></small>
                            <?php $i++; // Boucle numéro...
                                        if ($i === 2) { break; } // On arrête à la 2éme boucle ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><i class="fas fa-info-circle"></i> Derniere information</h4>
                        </div>
                        <div class="card-body">
                            <?php 
                                $i = 0;
                                foreach ($informations as $information): ?>
                                <h3 class="card-title pricing-card-title"><strong class="d-block text-gray-dark"><?= $this->nettoyer($information['titre']) ?></strong></h3>
                                    <div class="media text-muted pt-3">
                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                            "<?= $this->nettoyer($information['contenu']) ?>"
                                        </p>
                                </div>
                            <?php $i++;
                                    if ($i === 2) {break;} ?>
                            <?php endforeach; ?> 
                            <small class="d-block text-right mt-3"><a href="http://localhost/JeuxSociete/Ainformation">Tout voir</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
