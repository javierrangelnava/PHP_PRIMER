<!--Incluye el menu desde header.php-->
<?php 
    $title = "Switch";
    include 'includes/header.php' 
?>
    <h1>Switch Statement</h1>
    <?php
        $grade = 'B';

        switch($grade){
            case 'A':
                echo "<h2 style='color: green'>You are Superstar!</h2>";
                break;
            case 'B':
                echo "<h2 style='color: blue'>You did well!</h2>";
                break;
            default:
                echo "<h2 style='color: red'>You have Failed!</h2>";    
                break;
        }//switch
    ?>
<!--crear una dependencia hacia el archivo con el pie de pagina
si no lo encuentra la pagina truena, diferencia con include-->
<?php require 'includes/footer.php' ?>