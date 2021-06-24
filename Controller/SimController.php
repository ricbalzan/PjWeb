<?php

    session_start();

    include '../Model/Numero.php';
    include '../Dao/LinhaDAO.php';
    


    if ( (!empty($_POST['txtNumero'])) &&
        (!empty($_POST['txtSim'])) &&
        (!empty($_POST['txtcadastro'])))
        { 
            $erros = array();

         
            if (count($erros) == 0) {
                $linhas = new linhas();

                $linhas->numero = $_POST['txtNumero'];
                $linhas->sim = $_POST['txtSim'];
                $linhas->cadastro = $_POST['txtcadastro'];
               

                //echo "Usuário $linhas->numero cadastrado com sucesso<br>";
                header("location:../View/User/detail.php?".
                        "user=$linhas->numero");
            }
            else {
                //echo "Ocorreram erros ao cadastrar o usuário<br>";
                $err = serialize($erros);
                header("location:../View/User/error.php?erros=$err"); 
            }
        } 
?>