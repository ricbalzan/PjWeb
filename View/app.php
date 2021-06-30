<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Acesso ao Sistema</title>
    </head>
    <body>
        <?php
            if (isset($_SESSION['usuario'])) {
                echo "<h1> USUARIO ONLINE</h1><p>";
                echo '<br><a href="../Controller/AuthController.php?operation=logout">LOGOUT</a><br>';   
            }
            else
                echo "<h1>USUARIO OFFLINE</h1><p>";
        ?>
    </body>
</html>