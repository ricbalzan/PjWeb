<?php

    session_start();

    include '../Model/Usuario.php';
    include '../Include/UserValidate.php';

    

    if ( (!empty($_POST['txtCpf'])) &&
        (!empty($_POST['txtNome'])) &&
        (!empty($_POST['txtEmail'])) &&
        (!empty($_POST['txtSenha'])) &&
        (!empty($_POST['txtRg'])) &&
        (!empty($_POST['txtAtivo']))        )
        { 
            $erros = array();

            if(!EmailValidate::testarEmail($_POST['txtEmail'])){
                $erros[] = 'E-mail inválido';
            }

            if(!ValidaCPF::testarCPF($_POST['txtCpf'])){
                $erros[] = 'CPF inválido';
            }

            if (count($erros) == 0) {
                $usuario = new Usuario();

                $usuario->cpf = $_POST['txtCpf'];
                $usuario->nome = $_POST['txtNome'];
                $usuario->email = $_POST['txtEmail'];
                $usuario->senha = $_POST['txtSenha'];
                $usuario->rg = $_POST['txtRg'];
                $usuario->ativo=$_POST['txtAtivo'];
               /** 
                /echo "Usuário $usuario->nome cadastrado com sucesso<br>";
                     header("location:../View/User/detail.php?".
                    "user=$usuario->nome&"."mail=$usuario->email");
            }
            else {
                //echo "Ocorreram erros ao cadastrar o usuário<br>";
                $err = serialize($erros);
                header("location:../View/User/error.php?erros=$err"); 
            }
             */
            
            echo "Parabéns, todos os campos foram preenchidos.";
        }
        else{
             //echo "OOPS!! é obrigatorio informar todos os campos.";
            $erros = array();
            $erros[] = 'Informe todos os campos';
            $err = serialize($erros);
        }
    }
           
?>