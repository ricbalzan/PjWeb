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
        <blockquote class="blockquote text-center">
                <p class="mb-0"><h1>Consulta de Linhas</h1></p>
            </blockquote>
    </head>


    <body>
        <?php
    
        if (isset($_SESSION['linha'])) {
            include_once '../../Model/Numero.php';
            var_dump($users).die;
       $linha = array();
            $linha = unserialize($_SESSION['linha']);

           foreach($linha as $l) {
                $numero = $l['numero'];
                $sim = $l['sim'];
                $data = $l['data'];
                echo " Numero:".$numero."<br>";
                echo "CPF: ".$sim."<br>";
                echo $data;

            echo "<tr><td><a href='../../Controller/SimController.php?operation=deletar&id=$numero'>Deletar</a></td> - $numero<br></tr> ";
            }       
        }
        ?>
    </body>
</html>