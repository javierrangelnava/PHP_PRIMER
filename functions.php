<!--Incluye el menu desde header.php-->
<?php 
    $title = "Functions";
    include 'includes/header.php' 
?>
    <h1>Functions</h1>
    <?php 
        /**Defining a function */
        function writeMessage(){
            echo "You are a really nice person, Have a nice time!<br/>";
        }//writeMessage

        writeMessage();
        writeMessage();

        /**Functions with parameters */
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum<br/>";
        }//addFunction 

        addFunction(10, 20);

        /**Parameters reference */
        $numero = 100;
        function changeValue(&$value){
            $value += 10;
        }//changeValue

        changeValue($numero);
        echo "The change value es: $numero<br/>";

        //Returning a value
        function returnProduct($val1, $val2){
            $prod = $val1 * $val2;
            return $prod;
        }//returnProduct

        $return_value = returnProduct(2, 8);
        echo "The producto is: $return_value<br/>";
    ?>
<!--crear una dependencia hacia el archivo con el pie de pagina
si no lo encuentra la pagina truena, diferencia con include-->
<?php require 'includes/footer.php' ?>