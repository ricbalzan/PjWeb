<?php
    session_start();
?>

<html>

<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/listarUsuario.css" />
<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />
    <head>
        <meta charset="UTF-8">
        <title>Consulta de Usuários</title>
    </head>

<h1> Consulta de Usuários</h1>

    <div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">CPF</th>
            <th scope="col">AÇES</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if (isset($_SESSION['users'])) {
            include_once '../../Model/Usuario.php';

            $users = array();
            $users = unserialize($_SESSION['users']);

            foreach($users as $u) {
                $cpf = $u['cpf'];
                $nomeCompleto = $u['nome'];
                echo $nomeCompleto;
                echo $cpf;
                echo "<tr><td><a href='../../Controller/UserController.php?operation=deletar&id=$cpf'>Deletar</a></td> - $nomeCompleto<br></tr> ";
            }
            unset($_SESSION['user']);
            
        }
              <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Bootstrap Grid 4 Tutorial and Examples</td>
            <td>Cristina</td>
            <td>3.417</td>
            <td>
              <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Bootstrap Flexbox Tutorial and Examples</td>
            <td>Cristina</td>
            <td>1.234</td>
            <td>
              <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>



    <body>
        <?php
        if (isset($_SESSION['users'])) {
            include_once '../../Model/Usuario.php';

            $users = array();
            $users = unserialize($_SESSION['users']);

            foreach($users as $u) {
                $cpf = $u['cpf'];
                $nomeCompleto = $u['nome'];
                echo $nomeCompleto;
                echo $cpf;
                echo "<tr><td><a href='../../Controller/UserController.php?operation=deletar&id=$cpf'>Deletar</a></td> - $nomeCompleto<br></tr> ";
            }
            unset($_SESSION['user']);
            
        }
        
        ?>
    </body>

</html>