<!--Incluye el menu desde header.php-->
<?php 
    $title = "While";
    include 'includes/header.php' 
?>
    <h1>While Loop</h1>
    <?php 
    $grade = 0;

    while($grade < 10)
    {
        echo "<p>I am less than 10: $grade</p>";
        $grade++;
    }//while

    echo "Exit Loop!";
    ?>

    <h1>Do-While Loop</h1>
    <?php 
    $grade = 0;

    do
    {
        echo "<p>A am do While Loop</p>";
        $grade++;
    }while($grade < 10);//do while

    echo "Exit Loop!";
    ?>
<!--crear una dependencia hacia el archivo con el pie de pagina
si no lo encuentra la pagina truena, diferencia con include-->
<?php require 'includes/footer.php' ?>