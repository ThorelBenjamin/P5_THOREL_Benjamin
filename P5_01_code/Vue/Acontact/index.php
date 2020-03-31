<?php $this->titre = "Mon Blog - Administration" ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2">
            <div class="bg-white">
                <div class="py-4 px-3 mb-4 bg-light">
                    <div class="media d-flex align-items-center">
                        <a href="http://localhost/JeuxSociete/admin" class="font-weight-bold">Administration</a>
                    </div> 
                </div>
                <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0">Jeu</p>
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Njeux">
                            Ajouter un nouveau jeu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Ajeux">
                            Modéré les jeux
                        </a>
                    </li>
                </ul>
                <br>
                <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0">Evénement</p>
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Nevenement">
                            Ajouter un nouveau événement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Aevenement">
                            Modéré les événements
                        </a>
                    </li>
                </ul>
                <br>
                <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0">Information</p>
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Ninformation">
                            Ajouter une nouvelle information
                         </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Ainformation">
                            Modéré les informations
                        </a>
                     </li>
                </ul>
                <br>
                <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0">Contact</p>
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-italic bg-light" href="http://localhost/JeuxSociete/Acontact">
                             Modéré les demandes de contact
                        </a>
                    </li>
                </ul>
                <br>
            </div>
        </div>
        <div class="col-sm-10 col-md-10 col-lg-10">
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h5 class="border-bottom border-dark pb-2 mb-0">Il y a <?= $this->nettoyer($nbContacts) ?> message</h5>
                <div>
                    <?php foreach ($contacts as $contact): ?>
                        <div class="pt-5">
                            <h4><?= $this->nettoyer($contact['titre']) ?></h4>
                            <h6 class="small pl-3"><?= $this->nettoyer($contact['email']) ?></h6>
                            <p class="small pl-3"></p>
                            <p class="pt-3 pl-5"><?= $this->nettoyer($contact['contenu']) ?></p>
                            <p class="text-right">de <?= $this->nettoyer($contact['nom']) ?> <?= $this->nettoyer($contact['prenom']) ?></p>
                            <div class="row">
                                <div class="col"><hr></div>
                                <div class="col-auto">
                                    <form method="post" action="acontact/deleteContact">
                                        <input type="hidden" name="id" value="<?= $contact['id'] ?>" />
                                        <input type="submit" name="supprimer" value="supprimer" class="btn btn-outline-danger btn-sm" />
                                    </form> 
                                </div>
                                <div class="col"><hr></div>
                            </div>
                             
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
            

         
