<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Usuário Efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1>
        <?php
            session_start();
            if (isset($_SESSION['nome']) && isset($_SESSION['email'])) {
                echo '<br> Usuário:' . $_SESSION['nome'].
                     '<br> E-mail:' . $_SESSION['email'];
                }
        ?>    
    </body>
</html>