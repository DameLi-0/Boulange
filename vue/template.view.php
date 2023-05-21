<?php require_once "./outil/Securite.class.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Boulanger</title>
    <link rel="stylesheet" href="./css/template.css" />
</head>

<body>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light container justify-content-between">
          <div class="d-flex">
          <a class="navbar-brand" href="index.php"><img src="./public/images/boulangelogo.png" width="195" height="50" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=catalogue">Catalogue</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=panier">Commande</a>
              </li>
              
              <?php if (Securite::verifAccessAdmin()){ ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administration</a>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="index.php?action=creer">Crée ordinateur</a></li>
                    <li><a class="dropdown-item" href="index.php?action=tab">Listes d'ordi</a></li>
                    <li><a class="dropdown-item" href="index.php?action=creerAdmin">Crée admin</a></li>
                    <li><a class="dropdown-item" href="index.php?action=tabAdmin">Listes d'admin</a></li>
                  </ul>

                </li>
              <?php } ?>
            </ul>
          </div>
          </div>
        <?php if (Securite::verifAccessAdmin()){ ?>

            <div class="divConnexion">
                <a class="btConnexion" href="index.php?action=deconnexion">Déconnexion</a>
            </div>
        
        <?php }else{ ?>
            
            <div class="divConnexion">
                <a class="btConnexion" href="index.php?action=connexion">Connexion</a>
            </div>                    
            
        <?php } ?>  
        </nav>
    
</body>
</html>