<?php 
include("../../Menu.php"); 
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuários</title>
        <br>
        <br>
        <br>
            <blockquote class="blockquote text-center">
                <p class="mb-0"><h1>Cadastro de Usuários</h1></p>
            </blockquote>
        <link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/menu.css" />
    </head>
<br>
<br>
<br>
 
    <body background="/View/images/fundo.png"; background-size: 100% auto; >

       
            <form action="../../Controller/UserController.php?operation=cadastrar" method="post" name="form_user">

                <div class="container" id="homer">
                    <div class="container col-xs-12 col-sm-6 col-md-6 col-lg-12">
                    <div class="conteudo">
                    <form action="../../Controller/UserController.php?operation=cadastrar" method="post" action="" name="form_user">
                <div class="row">
    

                <div class="col-md-2" id="cpf"> 
                    <label for="txtCpf">CPF:</label>
                    <input class="form-control" required type="text" name="txtCpf" id="txtCpf" /><br><br>
                </div>

                <div class="col-md-5" id="nome"> 
                    <label for="txtNome">NOME:</label>
                    <input class="form-control" required type="text" name="txtNome" id="txtNome" /><br><br>
                </div>

                <div class="col-md-5" id="txtEmail"> 
                    <label for="txtEmail">EMAIL:</label>
                    <input required type="email" class="form-control" name="txtEmail" id="txtEmail" /><br><br>
                </div>

                <div class="col-md-2" id="txtSenha">
                    <label for="txtSenha">SENHA:</label>
                    <input required type="password" class="form-control" name="txtSenha" id="txtSenha" /><br><br>
                </div>

                <div class="col-md-3" id="txtNascimento"> 
                    <label for="txtNascimento">DATA DE NASCIMENTO:</label>
                    <input required type="date" class="form-control" name="txtNascimento" id="txtNascimento" data-mask="00/00/0000" maxlength="8" /><br><br>
                </div>

                <div class="col-md-2" id="txtRg">
                    <label for="txtRg">RG:</label>
                    <input riqueried type="text" class="form-control" name="txtRg" id="txtRg" /><br><br>
                </div>

                <div class="col-md-1" id="txtAtivo">
                    <label for="txtAtivo">ATIVO:</label>
                    <SELECT  required name="txtAtivo" class="form-control" id= "txtAtivo"><OPTION>SIM <OPTION>NÃO </SELECT> <br><br>
                </div>

                <div class="col-md-2" id="txtcontrato">
                    <label for="txtContrato">Numero do Contrato:</label>
                    <input required type="text" class="form-control" name="txtContrato" id="txtContrato" /><br><br>
                </div>


                <div class="col-md-2" id="txtTipo">
                    <label for="txtTipo">TIPO:</label>
                    <SELECT  required name="txtTipo" class="form-control" id= "txtTipo"><OPTION>FUNCIONÁRIO <OPTION>TERCEIRO </SELECT> <br><br>
                </div>


                <div class="container-fluid">
                    <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary"> Cadastrar</button>
                    <button type="reset" class="btn btn-primary"> Limpar </button>
                </div>
                
            </div>
            <br>
        </div>
    </div>
</div>
                    </form>
            </div>
    </div>


    </body>

</html>
