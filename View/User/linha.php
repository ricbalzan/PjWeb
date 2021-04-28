<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Sim Crad</title>
    </head>

    <body>

    <form action="../../Controller/SimController.php" method="post" name="form_sim">

        <input type="text" name="txtnumero" id="txtNumero" placeholder="Numero" /><br><br>
        <input type="text" name="txtsim" id="txtSim" placeholder="Sim Card" /><br><br>
        <input type="datetime" name="txtcadastro" id="txtcadastro" placeholder="Data de Cadastro DD/MM/AAAA" /><br><br>

        <input type="submit" value="Cadastrar"/>
        <input type="reset" value="Limpar"/>
    </form>
     
    </body>

</html>