<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <blockquote class="blockquote text-center">
                <p class="mb-0"><h1>Cadastro de Usuários</h1></p>
            </blockquote>
        <link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    </head>

    

    <body>
<div class="conteudo">
    <div class="form-group">
    <form action="../../Controller/UserController.php" method="post" action="" name="form_user">

    

        <div id="cpf"> 
        <input class="form-control" type="text" name="txtCpf" id="txtCpf" placeholder="Cpf" /><br><br>
        </div>
        <div id="nome"> 
        <input class="form-control" type="text" name="txtNome" id="txtNome" placeholder="Nome" /><br><br>
        </div>
        <div id="txtEmail"> 
        <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" /><br><br>
        </div>
        <div id="txtSenha"> 
        <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Senha" /><br><br>
        </div>
        <div id="txtNascimento"> 
        <input type="date" class="form-control" name="txtNascimento" id="txtNascimento" data-mask="00/00/0000" maxlength="8" placeholder="Nacimento DD/MM/AAAA" /><br><br>
        </div>
        <div id="txtRg">
        <input type="text" class="form-control" name="txtRg" id="txtRg" placeholder="Rg" /><br><br>
        </div>
        <div id="txtAtivo">
        <label>Ativo :</label><SELECT  name="txtAtivo" class="form-control" id= "txtAtivo"><OPTION>SIM <OPTION>NÃO </SELECT> <br><br>
        </div>
        
        <input type="submit" class="btn btn-success" value="Cadastrar"/>
        <input type="reset" class="btn btn-warning" value="Limpar"/>
    </form>
    </div>
    </div>
    </body>

</html>
