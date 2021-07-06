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
        $user = unserialize($_SESSION['usuario']);
        if (!$user)
        header("location:../../index.php");
    ?>
        <?php
    
        if (isset($_SESSION['linhas'])) {
            include_once '../../Model/Numero.php';
            //var_dump($linha).die;
            $linhas = array();
            $linhas = unserialize($_SESSION['linhas']);

           foreach($linhas as $l) {
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