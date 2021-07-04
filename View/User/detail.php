<?php 
include("../../Menu.php"); 
?> 

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/menu.css" />
    <head>
        <title>Cadastro de Usuário Efetuado</title>
        <blockquote class="blockquote text-center">
                <p class="mb-0"><h1>Resultado</h1></p>       
                <p class="mb-0"><h1>Cadastrado com Sucesso!!</h1></p>

            </blockquote>
    </head>
    <body>

        <?php
            session_start();
            if (isset($_SESSION['cpf']) && isset($_SESSION['nome'])) {
                echo '<br> CPF:' . $_SESSION['cpf'].
                     '<br> Nome:' . $_SESSION['nome'];
                }
        ?>   
        
    </body>
</html>