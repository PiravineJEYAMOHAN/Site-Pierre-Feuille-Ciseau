
<!-- PROCESSUS DE DECONNEXION -->

<?php   

if(!isset($_SESSION)){
    session_start(); 
  }  
  $_SESSION=[];  // $_SESSION= array();   
  session_unset(); // arraylist.remove(int index)
  session_destroy(); //supprime reference (a verifier)
  header('Location: index.php');
  exit();
   
?>