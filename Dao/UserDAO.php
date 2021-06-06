<?php
    include '../Persistence/ConnectioDB.php';

    class UserDAO {
        private $connection = null;

        public function __construct() {
            $this->connection = ConnectionDB::getInstance();
        }

        public function create($usuario) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO usuario (cpf, nome, email, senha, nascimento, rg, ativo, contrato, tipo;) VALUES (?,?,?,?,?,?,?,?,?)"
                );

                $statement->bindValue(1, $usuario->cpf);
                $statement->bindValue(2, $usuario->nome);
                $statement->bindValue(3, $usuario->email);
                $statement->bindValue(4, $usuario->senha);
                $statement->bindValue(5, $usuario->nascimento);
                $statement->bindValue(6, $usuario->rg);
                $statement->bindValue(7, $usuario->ativo);
                $statement->bindValue(8, $usuario->contrato);
                $statement->bindValue(7, $usuario->ativo);


                $statement->execute();

                //var_dump($statement); die();

                //encerra a conexão
                $this->connection = null;
            } catch (PDOException $e) {
                echo "ocorreram erros ao inserir o usuário";
                echo $e;
            }

        public function search() {
            try {
                $statement = $this->connection->prepare("SELECT * FROM Usuarios");
                $statement->execute();
                $dados = $statement->fetchAll();
                $this->connection = null;

                return $dados;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao buscar os usuários";
                echo $e;
            }
        }
    } 
?>