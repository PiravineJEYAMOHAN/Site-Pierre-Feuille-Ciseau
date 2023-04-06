
<!-- AFFICHAGE ENTETE -->

<!DOCTYPE html>
<html>
<head>
  <title>Shifumi - jeu de pierre, feuille, ciseaux</title>    
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>  
<body>
    <header>
      <img src="img/Logo.png" alt="Logo">
      <h1>Rock-Paper-Scissors.com</h1>
      <nav>
        <ul>			
                <?php 
                    if(isset($_SESSION['role']) ) // Utilisateur connecté
                    {
                        echo '<li><a href="Logout.php">Se deconnecter</a></li>'; //Deconnexion                      
                    }
                      
                    else // Utilisateur non connecté
                    {
                        echo  '<li><a href="Authentifier.php">Se Connecter</a></li>'; //Page de connexion
                        echo '<li><a href="registration.php?mod=add">Inscription</a></li>'; //Page d'inscription
                      
                    }
                  ?>
                  <li><a href="#">Profil</a></li>          
        </ul>
      </nav>
	  </header>
  </body>
  </html>

