<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuários</title>
    </head>

    <body>

    <form action="../../Controller/UserController.php" method="post" name="form_user">

        <input type="text" name="txtCpf" id="txtCpf" placeholder="Cpf" /><br><br>
        <input type="text" name="txtNome" id="txtNome" placeholder="Nome" /><br><br>
        <input type="text" name="txtEmail" id="txtEmail" placeholder="Email" /><br><br>
        <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" /><br><br>
        <input type="datetime" name="txtNascimento" id="txtNascimento" placeholder="Nacimento DD/MM/AAAA" /><br><br>
        <input type="text" name="txtRg" id="txtRg" placeholder="Rg" /><br><br>
        <label>Ativo :</label><SELECT  name="txtAtivo" id= "txtAtivo"><OPTION>SIM <OPTION>NÃO </SELECT> <br><br>

        <input type="submit" value="Cadastrar"/>
        <input type="reset" value="Limpar"/>
    </form>
     
    </body>

</html>
