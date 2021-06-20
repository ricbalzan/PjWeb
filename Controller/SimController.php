<?php

    session_start();

    include '../Model/Simcard.php';
    include '../Include/UserValidate.php';
    include '../Dao/UserDAO.php';
    

    if ( (!empty($_POST['txtNumero'])) &&
        (!empty($_POST['txtSim'])) &&
        (!empty($_POST['txtcadastro'])))
        { 
            $erros = array();

         
            if (count($erros) == 0) {
                $simcard = new SimCard();

                $simcard->numero = $_POST['txtNumero'];
                $simcard->sim = $_POST['txtSim'];
                $simcard->cadastro = $_POST['txtcadastro'];
               

                //echo "Usuário $usuario->nome cadastrado com sucesso<br>";
                header("location:../View/User/detail.php?".
                        "user=$simcard->numero");
            }
            else {
                //echo "Ocorreram erros ao cadastrar o usuário<br>";
                $err = serialize($erros);
                header("location:../View/User/error.php?erros=$err"); 
            }
            
            echo "Parabéns, todos os campos foram preenchidos.";
        }
        else{
             //echo "OOPS!! é obrigatorio informar todos os campos.";
            $erros = array();
            $erros[] = 'Informe todos os campos';
            $err = serialize($erros);
           
        }   
?>