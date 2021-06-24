<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta de Usuários</title>
    </head>
    <table class="table table-condensed">
    <body>
   

        <?php
        if (isset($_SESSION['users'])) {
            include_once '../../Model/Usuario.php';

            $users = array();
            $users = unserialize($_SESSION['users']);

            foreach($users as $u) {
                $cpf = $u['cpf'];
                $nomeCompleto = $u['nome'];
                echo "<tr><td><a href='../../Controller/UserController.php?operation=deletar&id=$cpf'>Deletar</a></td> - $nomeCompleto<br></tr> ";
            }
            unset($_SESSION['user']);

        }
        </table>
        ?>
    </body>
    </table>
</html>
