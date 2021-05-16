<?php
    class ConnectionDB extends PDO {
        private static $instance = null;

        public function __construct($dsn, $usuario, $senha) {
            parent::__construct($dsn, $usuario, $senha);
        }

        public static function getInstance(){
            if (!isset(self::$instance)) {
                try {
                    self::$instance = new ConnectionDB(
                        "mysql:dbname=aula_php;host=localhost",
                        "root",
                        ""
                    );
                    echo "conexão com o banco de dados efetuada com sucesso!";
                } catch (Exception $e) {
                    echo "Ocorreram erros na conexão com o BD";
                    echo $e;
                    die();
                    exit();
                }
            }
            return self::$instance;   
        }
    }
?>