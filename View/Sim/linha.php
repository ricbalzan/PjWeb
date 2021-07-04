
<?php 
include("../../Menu.php"); 
?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Linhas</title>
        <br>
        <br>
        <br>
        <blockquote class="blockquote text-center">
                <p class="mb-0"><h1>Cadastro de Linhas</h1></p>
            </blockquote>
        <link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/menu.css" />
                <br>
                <br>
                <br>
                <br>

    </head>

    <body background="/View/images/fundo.jpg" class="img-fluid" alt="Imagem responsiva">

    <form action="../../Controller/SimController.php?operation=cadastrar" method="post" name="form_sim">

    <div class="container" id="homer">
                    <div class="container col-xs-12 col-sm-6 col-md-6 col-lg-12">
                    <div class="conteudo">
                    <form action="../../Controller/UserController.php" method="post" action="" name="form_user">
                <div class="row">


                <div class="col-md-5" id="txtNumero"> 
                    <label for="txtNumero">NUMERO:</label>
                    <input class="form-control" type="text" name="txtNumero" id="txtNumero" /><br><br>
                </div>

                <div class="col-md-4" id="txtSim"> 
                    <label for="txtSim">SIM CARD:</label>
                    <input class="form-control" type="text" name="txtSim" id="txtSim" /><br><br>
                </div>

                <div class="col-md-3" id="txtCadastro"> 
                    <label for="txtCadastro">DATA DE CADASTRO:</label>
                    <input type="date" class="form-control" name="txtCadastro" id="txtCadastro" data-mask="00/00/0000" maxlength="8" /><br><br>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


                <div class="container-fluid">
                    <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary"> Cadastrar</button>
                    <button type="reset" class="btn btn-primary"> Limpar </button>
                </div>

    </form>
     
    </body>

</html>