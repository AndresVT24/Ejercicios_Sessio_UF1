<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <p>NOMBRE REGISTRAT</p>
    <?php
        session_start();
        $_SESSION["ocult"]= $_GET["ocult"];
    ?>
    <a href="./ex41pagina3.php">ENDEVINAR</a>
</body>
</html>