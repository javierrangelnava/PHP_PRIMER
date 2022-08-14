<!--Incluye el menu desde header.php-->
<?php 
    $title = "For";
    include 'includes/header.php' 
?>
    <h1>For Loops</h1>   
    <?php 
    for($count = 0; $count < 10; $count++)
    {
        echo "<p>Hello World $count</p>";
    }//for
    ?>
<!--crear una dependencia hacia el archivo con el pie de pagina
si no lo encuentra la pagina truena, diferencia con include-->
<?php require 'includes/footer.php' ?>