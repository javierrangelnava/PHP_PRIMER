<!--Incluye el menu desde header.php-->
<?php 
    $title = "String";
    include 'includes/header.php' 
?>
    <?php
    $phrase1 ="student who came later";
    $phrase2 = "in class, stand with Rock";
    echo $phrase1 . ", named Tiffany, " . $phrase2;
    //echo $phrase2;

    echo "<hr/>";
    // String transformation
    $name = "trevor williams";
    echo "<br/>";
    echo "uppercase first letter: " . ucfirst($name) . "<br/>";
    echo "uppercase first letter of each word: " . ucwords($name) . "<br/>";
    echo "Upper case: " . strtoupper($name) . "<br/>";
    echo "Lower case: " . strtolower("THIS WAS ALL UPPER CASE.") . "<br/>";
    echo "<hr/>";
    echo "Repeat String: " . str_repeat("a", 10) . "<br/>";
    echo "Repeat String - Nested function: " . strtoupper(str_repeat("a", 10)) . "<br/>";
    // primer parametro la cadena, segundo el punto de inicio de 
    // la cadean a extraer, tercero el numero de caracteres a extraer
    echo "Get a substring: " . substr($name, 5, 10) . "<br/>";

    echo "Get a position of string of z: " . strpos($name, 'v') . "<br/>"; 

    echo "Find of lenght of string: " . strlen($name) . "<br/>";

    echo "Without Trim: " . "A" . " B C D " . "E" . "<br/>";

    echo "Trim spaces on both sides: " . "A" . trim(" B C D ") . "E" . "<br/>";

    echo "Trim spaces to the left: " . "A" . ltrim(" B C D ") . "E" . "<br/>";

    echo "Trim spaces to the right: " . "A" . rtrim(" B C D ") . "E" . "<br/>";

    //primer parametro cadena a buscar, segundo el remplazo, 
    // tercero la cadena donde se busca
    echo "Replace a string with other: " . str_replace('will', 'cool', $name) . "<br/>";
    ?>
<!--crear una dependencia hacia el archivo con el pie de pagina
si no lo encuentra la pagina truena, diferencia con include-->
<?php require 'includes/footer.php' ?>