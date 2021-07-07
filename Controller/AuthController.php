<?php
    session_start();
    include '../Model/Usuario.php';
    include '../Dao/UserDAO.php';


    function login() {
            $cpf = $_POST['txtCpf'];
            $senha = $_POST['txtSenha'];

            $userDao = new UserDAO();
            $user = $userDao->find($cpf, $senha);

            if ($user) {
                    $_SESSION['usuario'] = serialize($user);
                    header("location:../View/User/cadUsuario.php");
 
            } 
            else {
                unset($_SESSION['usuario']);
                header("location:../../index.php");
            }
    }

    function logout(){
        unset($_SESSION['usuario']);
        header("location:../../index.php");
    }


    $operacao = $_GET['operation'];
    if (isset($operacao)){
        switch ($operacao) {

            case 'login':
                login();
                break;
            case 'logout':
                logout();
                break;
        }
    }

?>