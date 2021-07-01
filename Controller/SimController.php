<?php

    session_start();

    include '../Model/Numero.php';
    include '../Dao/LinhaDAO.php';
    

    function criar(){
    if ( (!empty($_POST['txtNumero'])) &&
        (!empty($_POST['txtSim'])) &&
        (!empty($_POST['txtcadastro'])))
        { 
            $erros = array();

            var_dump($erros); die();
         
            if (count($erros) == 0) {
                $linhas = new linhas();

                $linhas->numero = $_POST['txtNumero'];
                $linhas->sim = $_POST['txtSim'];
                $linhas->data = $_POST['txtcadastro'];
               

                echo "Usuário $linhas->numero cadastrado com sucesso<br>";
                header("location:../View/User/detail.php?".
                        "user=$linhas->numero");
            }
            else {
                echo "Ocorreram erros ao cadastrar o usuário<br>";
                $err = serialize($erros);
                header("location:../View/User/error.php?erros=$err"); 
            }
        } 
     
    }

    function listar() {
        $LinhaDao = new LinhaDAO;
        $linhas = $LinhaDao->search();

        $_SESSION['linhas'] = serialize($linhas);
        header("location:../View/User/listarLinhas.php");
    }

    function atualizar() {
        echo "metodo atualizar";
    }
    function deletar() {
        $linhas = $_GET['sim'];
        if (isset($linhas)) {
            $LinhaDao = new LinhaDAO();
            $LinhaDao->delete($linhas);
            header("location:../../Controller/UserController.php?operation=consultar");
        }
        else {
            echo "Linha informada não existe";
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