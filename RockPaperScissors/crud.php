
<!-- CRUD (CREATE READ UPDATE DELETE) => OPERATIONS SUR LA BASE DE DONNEES -->

<?php 
    include("ConnectMySQl.php");
    
    $mod = $_GET['mod'];
    
    switch($mod){

        case 'log':
        {
                    
            $pseudo =  $_POST['pseudo'];
            $password =  $_POST['password'];
        
            $sql = "SELECT * FROM user WHERE pseudo = '$pseudo' AND password = '$password' ";
            $result = mysqli_query($conn , $sql);
        
            
            if(mysqli_num_rows($result)>0 ){
            {
                $row = mysqli_fetch_assoc($result);
                if($row['admin'] == true){
                    $_SESSION['role'] = 'admin';
                }
                else{
                     $_SESSION['role'] = $_POST['pseudo'];
                }
               
                header('Location: index.php?Operation = sucessSSSSSSS');
                             
            }
           }else{
                header('Location: Authentifier.php?Operation = echec'); 
              
           }
           
       
        }
        break;

        case 'add' || 'update': 
        {
            $nom = $_POST['nom'];
            $pseudo =  trim($_POST['pseudo']);
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
                header('Location: index.php?Operation=sucess');
        }else{
            header('Location: index.php?Operation=echec');       
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
             header('Location: index.php?Operation = echec');       
            }
            break;

        
        
        
    }
  
    
?>