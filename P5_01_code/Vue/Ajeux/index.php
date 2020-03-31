<?php $this->titre = "Mon Blog - Administration" ?>

<body>
    <div class="vertical-nav bg-white">
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

    <div class="page-content p-5">
         
        <div class="container">
            <table class="table table-striped">
              <thead >
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">modifier</th>
                    <th scope="col">supprimer</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($jeu as $jeux): ?>
                <tr>
                  <td><a href="<?= "jeu/index/" . $this->nettoyer($jeux['id']) ?>"> <p class="titreJeu"><?= $this->nettoyer($jeux['titre']) ?></p> </a></td> 
                  <td>
                    <form method="post" action="admin/deleteJeu">
                        <input type="hidden" name="id" value="<?= $jeux['id'] ?>" />
                        <input type="submit" name="supprimer" value="supprimer" class="btn btn-outline-danger btn-sm" />
                    </form>  
                  </td>
                  <td>
                    <form method="post" action="mjeux">
                        <input type="hidden" name="id" value="<?= $jeux['id'] ?>" />
                        <input type="submit" name="modifier" value="modifier" class="btn btn-outline-warning btn-sm" />
                    </form>  
                  </td>
                </tr>
                <?php endforeach; ?>  
              </tbody>
            </table>
        </div>
    </div>
    
</body>

<footer></footer>