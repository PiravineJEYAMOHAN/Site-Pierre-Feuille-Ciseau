
<?php 
 
    if(!isset($_SESSION)){
        session_start(); 
    }       
    $nomServeur= "localhost";
    $admin = "root";
    $password = "";
    $dbName = "shifumi";
    $conn = mysqli_connect($nomServeur, $admin, $password, $dbName);
    
    if($conn->connect_error ){
        die("erreur".$conn->connect_error);
    } 
 
    
    ?>