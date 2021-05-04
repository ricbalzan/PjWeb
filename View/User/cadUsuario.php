<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuários</title>
        <link rel="stylesheet" type="text/css" href="../templates/main.css" />
    </head>

    <body>
<div class="conteudo">
    <form action="../../Controller/UserController.php" method="post" action="" name="form_user">

    <h1>Cadastro de Usuários</h1>

        <div id="cpf">        
        <input class="cpf" type="text" name="txtCpf" id="txtCpf" placeholder="Cpf" /><br><br>
        </div>
        <div id="nome"> 
        <input class="nome" type="text" name="txtNome" id="txtNome" placeholder="Nome" /><br><br>
        </div>
        <div id="txtEmail"> 
        <input type="text" name="txtEmail" id="txtEmail" placeholder="Email" /><br><br>
        </div>
        <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" /><br><br>
        <input type="date" name="txtNascimento" id="txtNascimento" data-mask="00/00/0000" maxlength="8" placeholder="Nacimento DD/MM/AAAA" /><br><br>
        <input type="text" name="txtRg" id="txtRg" placeholder="Rg" /><br><br>
        <label>Ativo :</label><SELECT  name="txtAtivo" id= "txtAtivo"><OPTION>SIM <OPTION>NÃO </SELECT> <br><br>

        <input type="submit" value="Cadastrar"/>
        <input type="reset" value="Limpar"/>
    </form>
    </div>
    </body>

</html>
