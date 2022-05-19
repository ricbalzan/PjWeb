<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="View/templates/bootstrap/login.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title> Tela de login</title>

    </head>
    <body>
    <div id="container">

    <img src="/view/images/perfil.png" alt="Ícone do Perfil">

        <form class="form-signin text-center" action="../Controller/AuthController.php?operation=login" method="post" name="form_user">
            
            <input required type="text" name="txtCpf" id="txtCpf" placeholder="CPF" /><br><br>

            <input required type="password" name="txtSenha" id="txtSenha" placeholder="Senha" /><br><br>


            <div class="container-fluid">
                    <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary"> Login</button>
                    <button type="reset" class="btn btn-primary"> Limpar </button>
                </div>
        </form>
        </div>
    </body>

</html>