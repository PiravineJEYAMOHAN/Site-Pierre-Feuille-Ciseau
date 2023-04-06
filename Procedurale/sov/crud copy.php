<?php 
    include("ConnectMySQl.php");
    
    $mod = $_GET['mod'];
    
    switch($mod){

        case 'add' || 'update': 
        {
            $nom = $_POST['nom'];
            $pseudo =  $_POST['pseudo'];
            $password =  $_POST['password'];
            $email =  $_POST['email'];

        // query
        if($mod == 'add'){
            $sql = "INSERT INTO `user` ( `pseudo`, `nom`, `password`, `email`) 
            VALUES ( '$pseudo', '$nom', '$password', '$email')";   
        }else{
            $id = $_GET['id'];
            $sql = "UPDATE `user` SET `pseudo` = '$pseudo', `nom` = '$nom', `password` =  '$password', `email` = '$email'
            WHERE `user`.`id` =  $id";
        }
        
        $query = mysqli_query($conn , $sql); 

        if($query){
                header('Location: index.php?Operation = sucess');
        }else{
            header('Location: index.php?Operation = echec');       
        }
        break;
    }

        

        case 'delete':
            
            $id = $_GET['id'];
     
            $sql = "DELETE FROM user WHERE `user`.`id` =  '$id' ";
            $query = mysqli_query($conn , $sql); 
     
            if($query){
                 header('Location: index.php?Operation = sucess');
            }else{
             heaser('Location: index.php?Operation = echec');       
            }
            break;

        
        
        
    }
  
    
?>