<?php
    session_start();
?>

<html>


<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />
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
                $cpf = $u['cpf'];
                $nomeCompleto = $u['nome'];
                $tipo = $u['tipo'];
                echo $nomeCompleto;
                echo $cpf;
                echo $tipo;
                //var_dump($users).die;
                echo "<tr><td><a href='../../Controller/UserController.php?operation=deletar&id=$cpf'>Deletar</a></td> - $nomeCompleto<br></tr> ";
            }
            
        }
        
        ?>
    </body>

</html>