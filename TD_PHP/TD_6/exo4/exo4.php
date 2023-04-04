<html>
<body>
    <h1>Ma liste de course</h1>

    <?php
    $stack = array();
    array_push($stack, $_POST["item"]);
    print_r($stack);
?>
   
    
   <?php for ($i = 0; $i < count($stack); $i++) { ?>
        <ol><li><?php echo $stack[0] ;?></li></ol>
    <?php }?>
        

    <a href="http://td6.ex4/TD_PHP_ex4.html">lien</a>
  
</body>
</html>