<?php
    session_start();
    include("../../Menu.php"); 
?>

<html>


<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/menu.css" />
    <head>
        <meta charset="UTF-8">
        <title>Consulta de Usuários</title>
        <blockquote class="blockquote text-center">
                <p class="mb-0"><h1>Consulta de Usuários</h1></p>
            </blockquote>
    </head>


    <body>
        <?php
      if (isset($_SESSION['usuario'])) {
            include_once '../../Model/Usuario.php';
            $usuario = array();
            $usuario = unserialize($_SESSION['usuario']);


                $table  = '<table class="table">';
                $table .= '<thead class="thead-dark">';
                $table .= '<tr>';
                $table .= '<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCPF</td>';
                $table .= '<td>Nome</td>';
                $table .= '<td>RG</td>';
                $table .= '<td>Tipo</td>';
                $table .= '<td>Ativo</td>';
                $table .= '<td>Contrato</td>';
                $table .= '<td>Editar</td>';
                $table .= '<td>Excluir</td>';
                $table .= '</tr>';
                $table .= '</thead>';
                $table .= '<tbody>';

                foreach ($usuario as $key => $usuario) {
                  $table .= '<tr>';

                  $cpf = $usuario['cpf'];
                  $nomeCompleto = $usuario['nome'];
                  $rg = $usuario['rg'];
                  $tipo = $usuario['tipo'];
                  $ativo = $usuario['ativo'];
                  $contrato = $usuario['contrato'];

                      $table .= "<td>$cpf</td>";
                      $table .= "<td>$nomeCompleto</td>";
                      $table .= "<td>$rg</td>";
                      $table .= "<td>$tipo</td>";
                      $table .= "<td>{$ativo}</td>";
                      $table .= "<td>{$contrato}</td>";
                      $table .= "<td><a class='btn btn-primary' href='../../Controller/UserController.php?operation=alterar&id=$cpf'>Editar</a></td>";
                      $table .= "<td><a class='btn btn-danger' href='../../Controller/UserController.php?operation=deletar&id=$cpf'>Excluir</a></td>";
                  $table .= '</tr>';
              }
      }
              // fecahamento do html
    $table .= '</tbody>';
    $table .= '</table>';

// exibição na tela
            echo $table;
         
     ?>
  </body>
</html> 