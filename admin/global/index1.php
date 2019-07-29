
<?php
session_start();
if (!isset($_SESSION["nombre"])) {
    header("location:iniciar.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>bienvenido <?php echo  $_SESSION["nombre"] ?> </h1>
    <a href="cerrar.php">cerrar session</a>
</body>
</html>