<html>
<body>



<?php if (empty($_GET["name"] && $_GET["psw"])){
    echo "Veuillez saisir tous les champs";
    }else{
    ?>
    Welcome <?php echo $_GET["name"];?>
    <br> Your password is: <?php echo $_GET["psw"]; ?>
    <?php   
    } 
    $varname = $_GET["name"]; 
    $varpsw = $_GET["psw"];   
    ?>





</body>
</html>
