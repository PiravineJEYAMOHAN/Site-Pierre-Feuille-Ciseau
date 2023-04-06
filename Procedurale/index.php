<?php 
	if(!isset($_SESSION)){
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shifumi - Jeu de pierre-papier-ciseaux</title>
	<link rel="stylesheet" type="text/css" href="style/styles.css">
	
</head>
<body>
<?php 
    include("entete.php");
?>
	<div class="container">
		<h1> Bienvenue Sur le site</h1>		
		<?php 
                    
					if(isset($_SESSION['role']))
                    {
						if($_SESSION['role'] == 'admin'){
							echo '<a href="adminUser.php">Gerer les utilisateur</a>';
						}
                         
                       
                    }                    
                
            ?>

		<div></div>
	</div>


	
</body>
</html>
