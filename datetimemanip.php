<!--Incluye el menu desde header.php-->
<?php
    $title = "Datetime";
    include 'includes/header.php' 
?>
    <h1>Date Time Manipulation</h1>
    <?php 
    $datenow = getdate();
    echo "Today's Date is: </br>";
    // return an array with three value, day, month, year
    echo $datenow['mday'] . "</br>";
    echo $datenow['mon'] . "</br>";
    echo $datenow['year'] . "</br>";
    
    echo time(). "<br />";

    print date("m/d/y G.i:s<br>", time()) . "<br />";

    print "Today is: ";
    print date("j of F Y, \a\\t g.i a", time());
    ?>
<!--crear una dependencia hacia el archivo con el pie de pagina
si no lo encuentra la pagina truena, diferencia con include-->
<?php require 'includes/footer.php' ?>