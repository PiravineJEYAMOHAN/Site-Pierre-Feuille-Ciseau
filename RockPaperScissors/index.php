
<!-- PAGE PRINCIPAL -->

<!-- Commence une session pour récupérer les données de l'utilisateur -->
<?php 
	if(!isset($_SESSION)){ 
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shifumi - Jeu de pierre-papier-ciseaux</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
		
</head>
<body>
	<!-- Insertion de l'entête avec logo, nom de page etc -->
	<?php  include("entete.php"); ?>

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
	</div>
</body>
</html>
