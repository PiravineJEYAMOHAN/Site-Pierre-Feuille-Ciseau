
<?php 
    $nomServeur= "localhost";
    $admin = "root";
    $password = "";
    $dbName = "shifumi";
    $conn = new mysqli($nomServeur, $admin, $password, $dbName);
    if($conn->connect_error ){
        die("erreur".$conn->connect_error);
    }
    echo "connexion reussie";
    $query = "SELECT * FROM user";
    $result =  $conn -> query($query);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "\n nom : ".$row["nom"]; 
        }
    }
    ?>