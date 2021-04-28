<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Usuário com Erro</title>
    </head>
    <body>
        <h1>ERROS!</h1>
        <?php
            if (isset($_SESSION['erros'])) {
                $erros = array();
                $erros = unserialize($_SESSION['erros']);

                foreach ($erros as $e) {
                    echo '<br />' . $e;
                }
                unset($_SESSION['erros']);
                
            }
        ?>    
    </body>
</html>