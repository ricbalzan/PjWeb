<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta de Usuários</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['users'])) {
            include_once '../../Model/Usuario.php';

            $users = array();
            $users = unserialize($_SESSION['users']);

            foreach($users as $u) {
                $id = $u['id'];
                $nomeCompleto = $u['nome'].' '.$u['sobrenome'];
                echo "<tr><td><a href='../../Controller/UserController.php?operation=deletar&id=$id'>Deletar</a></td> - $nomeCompleto<br></tr> ";
            }
            unset($_SESSION['user']);

        }
        ?>
    </body>
</html>
