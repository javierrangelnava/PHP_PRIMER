<!--Incluye el menu desde header.php-->
<?php 
    $title = "Index";
    include 'includes/header.php'; 
?>
    <h1>Hello HTML.</h1>
    <?php
        echo 'Hello PHP.';
        echo '<br/>';
        echo 'Second line';
    ?>
    <h2>Second section.</h2>
    <br>
    <?php
        $name = 'Javier Rangel';
        $edad = 20;
        echo $name;
        echo '<br/>';
        echo '<h1>My Name is: ' . $name . '<h1>';
        echo "<h1>Mi ege is: $edad</h1>";
    ?>

    <!--Bootstrap para darle estilo a un boton-->
    <Button type="button" class="btn btn-success">Click me!</Button>

<!--crear una dependencia hacia el archivo con el pie de pagina
si no lo encuentra la pagina truena, diferencia con include-->
<?php require 'includes/footer.php' ?>