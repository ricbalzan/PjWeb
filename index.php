<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="View/templates/bootstrap/css/bootstrap.css" />
        <meta charset="utf-8">
        <title> Tela de login</title>

    </head>
    <body background="/View/images/fundo.jpg"; background-size: 100% auto; >
    <br>
    <br>
    <br>
    <br>

        <form class="form-signin text-center" action="../Controller/AuthController.php?operation=login" method="post" name="form_user">
            
            <input required type="text" name="txtCpf" id="txtCpf" placeholder="CPF" /><br><br>

            <input required type="password" name="txtSenha" id="txtSenha" placeholder="Senha" /><br><br>


            <div class="container-fluid">
                    <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary"> Login</button>
                    <button type="reset" class="btn btn-primary"> Limpar </button>
                </div>
        </form>
    </body>

</html>