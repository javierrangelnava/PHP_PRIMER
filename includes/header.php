<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">
    <title>Primer - <?php echo $title; ?></title>
</head>
<body>
    <!--div utilizado por bootstrap para darle margenes al cuerpo de
    la pagina, termina en el archivo footer.php-->
    <div class="container">
        <h2>Follow each link the page example</h2>

        <!--ESTILIZAR LA BARRA DE MENU CON BOOTSTRAP UTILIZANDO LA PROPIEDAD CLASS-->
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="array.php">Simple Array and Printouts</a></li>
            <li class="nav-item"><a class="nav-link" href="forloop.php">Simple for loop</a></li>
            <li class="nav-item"><a class="nav-link" href="whiledowhileloop.php">While-Do While</a></li>
            <li class="nav-item"><a class="nav-link" href="ifstatement.php">Simple If Statement</a></li>
            <li class="nav-item"><a class="nav-link" href="switchstatement.php">Simple Switch Statement</a></li>
            <li class="nav-item"><a class="nav-link" href="stringmanip.php">String Manipulation</a></li>
            <li class="nav-item"><a class="nav-link" href="datetimemanip.php">Simple Date and Time Manipulation</a></li>
            <li class="nav-item"><a class="nav-link" href="functions.php">Functions</a></li>
        </ul>
