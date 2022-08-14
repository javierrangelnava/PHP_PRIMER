<!--Incluye el menu desde header.php-->
<?php 
    $title = "If";
    include 'includes/header.php' 
?>
    <?php 
        //  An If statement that will carry out an action based on the value of the varieble

        echo "<h2>If Statement</h2>";

        $grade = 50;
        if($grade >= 50){
            echo "<h3 style= 'color: green'>You have passed.</h3>";
        }//if
        else{
            echo "<h3 style='color: red'>You have failed.</h3>";
        }//else

        $grade = "A";
        // If-Else If-Else
        if($grade == "A"){
            echo "<h2 style= 'color: green'>You are a superstar!</h2>";
        }//if
        elseif($grade == "B"){
            echo "<h2 style='color: blue'>You did well!</h2>";
        }//elseif
        else{
            echo "<h2 style='color: red'>You have faled...</h2>";
        }//else
    ?>
<!--crear una dependencia hacia el archivo con el pie de pagina
si no lo encuentra la pagina truena, diferencia con include-->
<?php require 'includes/footer.php' ?>