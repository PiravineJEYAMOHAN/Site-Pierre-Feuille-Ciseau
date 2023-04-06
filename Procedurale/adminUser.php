<?php   
   
   if(!isset($_SESSION)){
    session_start(); 
  }  
   

   if(!isset($_SESSION['role'])){
    print_r($_POST['role']);
    header('Location: Authentifier.php');
   }
   
   include_once("ConnectMySQl.php");

   $sql = "SELECT * FROM user ORDER BY id DESC";
   $result = mysqli_query($conn , $sql);
   include("entete.php");
?>

   
    <div class="container"> 
    
      <a href="registration.php?mod=add" class="btn btn-secondary">Ajouter</a>
      <h1>Gestion Utilisateurs</h1>
      <table class="table">
        <thead>
          <tr>            
            <th>pseudo</th>
            <th>nom</th>
            <th>password</th>
            <th>email</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($result as $key => $res){
          //$_SESSION["nom".$res['id']] = $res['nom']; 
          echo "<tr>";
          echo "<td>".$res['pseudo']."</td>";
          echo "<td>".$res['nom']."</td>";          
          echo "<td>".$res['password']."</td>";
          echo "<td>".$res['email']."</td>";
          echo "<td>
          <a href=\"registration.php?id=$res[id]&mod=update\">Edit</a> | 
          <a href=\"crud.php?id=$res[id]&mod=delete\" 
          onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";         
          echo "</tr>";
        }
          //var_dump($_SESSION);
          ?>
       
        </tbody>
      </table>
    </div>

  </body>
    
</html>
   