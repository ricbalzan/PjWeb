<?php
    session_start();
    include("../../Menu.php"); 
?>
<html>


<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/menu.css" />
    <head>
        <meta charset="UTF-8">
        <title>Consulta de Linhas</title>
    </head>



    <body>
        <?php
        if (isset($_SESSION['linhas'])) {
            include_once '../../Model/linha.php';

            $linhas = array();
            $linhas = unserialize($_SESSION['linhas']);

            foreach($linhas as $l) {
                $numero = $l['numero'];
                $nomeCompleto = $u['nome'];
                echo $nomeCompleto;
                echo $numero;
                echo "<tr><td><a href='../../Controller/SimController.php?operation=deletar&id=$numero'>Deletar</a></td> - $nomeCompleto<br></tr> ";
            }
            unset($_SESSION['user']);
            
        }
        
        ?>
    </body>

</html>