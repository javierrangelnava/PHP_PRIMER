<!--Incluye el menu desde header.php-->
<?php
    $title = "Array";
    include 'includes/header.php' 
?>
    <h1>Arrays</h1>
    <?php   
    // Only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,10);
    //You can access the value in a subscript of the array using the index
    echo $numbers[5];

    echo "<p>$numbers[9]</p>";

    $size = count($numbers);
    echo "<p>Array Numbers is size: $size</p>";

    for($counter = 0; $counter < $size; $counter++)
    {
        echo "<br>$numbers[$counter]";
    }//for
    ?>
<!--crear una dependencia hacia el archivo con el pie de pagina
si no lo encuentra la pagina truena, diferencia con include-->
<?php require 'includes/footer.php' ?>