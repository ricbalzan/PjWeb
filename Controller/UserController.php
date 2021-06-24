<?php

    session_start();

    include '../Model/Usuario.php';
    include '../Include/UserValidate.php';
    include '../Dao/UserDAO.php';

    function criar() {
        $erros = array();

            if(!EmailValidate::testarEmail($_POST['txtEmail'])){
                $erros[] = 'E-mail inválido';
            }

            if(!ValidaCPF::testarCPF($_POST['txtCpf'])){
                $erros[] = 'CPF inválido';
            }

            if (count($erros) == 0) {
                $usuario = new usuario();

                $usuario->cpf = $_POST['txtCpf'];
                $usuario->nome = $_POST['txtNome'];
                $usuario->email = $_POST['txtEmail'];
                $usuario->senha = $_POST['txtSenha'];
                $usuario->rg = $_POST['txtRg'];
                $usuario->ativo=$_POST['txtAtivo'];
                $usuario->nascimento=$_POST['txtNascimento'];
                $usuario->contrato = $_POST['txtContrato'];
                $usuario->tipo = $_POST['txtTipo'];

                $UserDao = new UserDAO();
                $UserDao->create($usuario);
                var_dump($UserDao);die();
             
                $_SESSION['user'] = $usuario->nome;
                $_SESSION['mail'] = $usuario->email;
                header("location:../View/User/detail.php");
            }
            else {
                //echo "Ocorreram erros ao cadastrar o usuário<br>";
                $err = serialize($erros);
                $_SESSION ['erros'] = $err;
                header("location:../View/User/error.php"); 
            }
    }
    
    function listar() {
        $UserDao = new UserDAO;
        $usuario = $UserDao->search();

        $_SESSION['users'] = serialize($usuario);
        header("location:../View/User/listarUsuario.php");
    }

    function atualizar() {
        echo "metodo atualizar";
    }

    function deletar() {
        $cpf = $_GET['cpf'];
        if (isset($cpf)) {
            $UserDao = new UserDAO();
            $UserDao->delete($cpf);
            header("location:../../Controller/UserController.php?operation=consultar");
        }
        else {
            echo "Usuário informado não existe";
        }
    }

    $operacao = $_GET ['operation'];
        if (isset($operacao)){
            switch($operacao) {
                case 'cadastrar':
                    criar();
                    break;
                case 'consultar':
                    listar();
                    break;      
                case 'atualizar':
                    atualizar();
                    break;
                case 'deletar':
                    deletar();
                    break;
            }
        }     
?>