<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ENDEVINA EL NOMBRE: </p>

    <?php
        session_start();
        if(!isset($_GET['endevina'])){
            ?>
                <form action="">
                    <label for="">ENDEVIDA</label>
                    <input type="number" name="endevina">
                    <input type="submit">
                </form>
            <?php
        }
        else{
            if($_SESSION['ocult'] > $_GET['endevina']){
                echo "<p>EL NUMERO A ENDEVINAR ES MAJOR</p>";
                                    ?>
                <form action="">
                    <label for="">ENDEVIDA</label>
                    <input type="number" name="endevina">
                    <input type="submit">
                </form>
            
            <?php

            }
            else if ($_SESSION['ocult'] < $_GET['endevina']){
                echo "<p>EL NUMERO A ENDEVINAR ES MENOR</p>";
                ?>
                <form action="">
                    <label for="">ENDEVIDA</label>
                    <input type="number" name="endevina">
                    <input type="submit">

                </form>
            <?php
            }
            else{
                echo "<p>EL NUMERO A ENDEVINAR ES AQUEST</p>";
                echo "<a href='ex41pagina1.php'>TORNAR A JUGAR</a>";
            }
        }
    ?>
</body>
</html>