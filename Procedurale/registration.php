<?php 
    
    include_once("ConnectMySQl.php");

   $maj = false;
    $mod = $_GET['mod'];
   if($mod =='update'){

      $maj= true ;
      $id = $_GET['id'];
      $sql = "SELECT * FROM user WHERE id =  $id ORDER BY id DESC";
      $result = mysqli_query($conn , $sql);

      $action = '"crud.php?id='.$id.'&mod='.$mod.'"';
      $row = mysqli_fetch_assoc($result); // Récupère la ligne suivante d'un ensemble de résultats sous forme de tableau associatif
      
   }
   else{
    $maj = false;
    $action = '"crud.php?mod='.$mod.'"';
   }
   include("entete.php");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" action= <?php echo $action; ?> >
            
            <div class="form-group">
                <label for="nom">Name</label>
                <input type="text" class="form-control" id="nom" name = "nom" placeholder="Enter your name"
                <?php if($maj == true) {echo 'value =" '.$row['nom'].' "';}   ?>>
            </div>            
            <div class="form-group">
              <label for="pseudo">User</label>
              <input type="text" class="form-control" id="pseudo" name = "pseudo" placeholder="Enter pseudo"
              <?php if($maj == true) {echo 'value =" '.$row['pseudo'].' "';}   ?>>
              
            </div>            
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password"
              <?php if($maj == true) {echo 'value =" '.$row['password'].' "';}   ?>>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name = "email" placeholder="Enter your email"
                <?php if($maj == true) {echo 'value =" '.$row['email'].' "';}   ?>>
                
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>



