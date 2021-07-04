<?php
    session_start();
    include("../../Menu.php"); 
?>
<html>


<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../templates/bootstrap/css/menu.css" />
    <head>
        <meta charset="UTF-8">
        <title>Consulta de Linhas</title>
    </head>


    <body>
        <?php
        if (isset($_SESSION['linhas'])) {
            include_once '../../Model/Numero.php';

            $linhas = array();
            $linhas = unserialize($_SESSION['linhas']);

            
              // montagem do html da tabela     
              $table  = '<table class="table">';
              $table .= '<thead class="thead-dark">';
              $table .= '<tr>';
              $table .= '<td>Número</td>';
              $table .= '<td>Sim Card</td>';
              $table .= '<td>Data</td>';
              $table .= '<td>Editar</td>';
              $table .= '<td>Excluir</td>';
              $table .= '</tr>';
              $table .= '</thead>';
              $table .= '<tbody>';
              
              foreach($linhas as $l) {
                $table.= '<tr>';
                  $numero = $l['numero'];
                  $sim = $l['sim'];
                  $data = $l['data'];

                      $table .='           '."<td><input type='checkbox' value='{$numero}'></td>";
                      $table .= "<td>$sim</td>";
                      $table .= "<td>$data</td>";
                      $table .= "<td><a class='bnt btn-info' href='../../Controller/SimController.php?operation=alterar&id=$cpf'>Editar</a></td>";
                      $table .= "<td><a class='bnt btn-info' href='../../Controller/SimController.php?operation=deletar&id=$cpf'>Excluir</a></td>";
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