<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <br>
        <br>
        <br>
            <blockquote class="blockquote text-center">
                <p class="mb-0"><h1>Cadastro de Usuários</h1></p>
            </blockquote>
        <link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />
    </head>
<br>
<br>
<br>

    
    <body>
    <div class="container" id="homer">
        <div class="container col-xs-12 col-sm-6 col-md-6 col-lg-12">
        <div class="conteudo">
        <form action="../../Controller/UserController.php" method="post" action="" name="form_user">
        <div class="row">
    

        <div class="col-md-2" id="cpf"> 
        <label for="txtCpf">CPF:</label>
        <input class="form-control" type="text" name="txtCpf" id="txtCpf" /><br><br>
        </div>

        <div class="col-md-5" id="nome"> 
        <label for="txtNome">NOME:</label>
        <input class="form-control" type="text" name="txtNome" id="txtNome" /><br><br>
        </div>

        <div class="col-md-5" id="txtEmail"> 
        <label for="txtEmail">EMAIL:</label>
        <input type="text" class="form-control" name="txtEmail" id="txtEmail" /><br><br>
        </div>

        <div class="col-md-2" id="txtSenha">
        <label for="txtSenha">SENHA:</label>
        <input type="password" class="form-control" name="txtSenha" id="txtSenha" /><br><br>
        </div>

        <div class="col-md-2" id="txtNascimento"> 
        <label for="txtNascimento">DATA DE NASCIMENTO:</label>
        <input type="date" class="form-control" name="txtNascimento" id="txtNascimento" data-mask="00/00/0000" maxlength="8" /><br><br>
        </div>

        <div class="col-md-2" id="txtRg">
        <label for="txtRg">RG:</label>
        <input type="text" class="form-control" name="txtRg" id="txtRg" /><br><br>
        </div>

        <div class="col-md-1" id="txtAtivo">
        <label for="txtAtivo">ATIVO:</label>
        <SELECT  name="txtAtivo" class="form-control" id= "txtAtivo"><OPTION>SIM <OPTION>NÃO </SELECT> <br><br>
        </div>
        
        <div class="container" id="homer">
        <div class="container col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <input type="submit" class="btn btn-success" value="Cadastrar"/>
        </div>
        <div class="container" id="homer">
        <div class="container col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <input type="reset" class="btn btn-warning" value="Limpar"/>
        </div>
</div>

</div>
</div>
    </form>
    </div>
    </div>
    </body>

</html>
