<?php
     
    include_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site SIMPLON</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" >
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" ></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-gradient mb-0" style="background-color: red;">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="image/simplon.jpg" alt="Simplon" width="150" height="70" class="border border-primary" style="border-radius: 3%;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " style="margin-left: 8rem;" id="navbarNav">
      <ul class="navbar-nav  row align-items-start custom-line" style="font-size: 20px;">
        <li class="nav-item col" style="margin-left: 2rem;">
          <a class="nav-link text-white" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item col" style="margin-left: 2rem;">
          <a class="nav-link text-white" href="index.php">Inscription</a>
        </li>
        <li class="nav-item col" style="margin-left: 2rem;">
          <a class="nav-link text-white" href="Listes.php">Listes</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="container" id="liste">
  <div class="row justify-content-center">
    <div class="col-14"> -->
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
            <th scope="col">Numéro</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Affichage des lignes du tableau
            $reponse = 'SELECT * FROM inscription';
            $donnees = $bdd->query($reponse);

            while ($row = $donnees->fetch(PDO::FETCH_ASSOC)) {
                ?>
                  <tr>
                    <td><?php echo $row['nom'];?></td>
                    <td><?php echo $row['prenom'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['numero'];?></td>
                  </tr>
                <?php
            }
          ?>
        </tbody>
      </table>
    <!-- </div>
  </div>
</div> -->


    <div class="footer-basic p-3 mb-2 bg-black text-white">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Accueil</a></li>
                <li class="list-inline-item"><a href="index.php">Inscription</a></li>
                <li class="list-inline-item"><a href="#liste">Listes</a></li>
                
            </ul>
            <p class="copyright fs-5">Simplon ci © 2023</p>
        </footer>
    </div>
    <style> 
      .social > a:hover{
        background-color: red;
      }
      .list-inline-item > a:hover{
        color: red;
      } 

    </style>
</body>
</html>