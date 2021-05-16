<?php
    include '../Persistence/ConnectioDB.php';

    class UserDAO {
        private $connection = null;

        public function __construct() {
            $this->connection = ConnectionDB::getInstance();
        }

        public function create($user) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO usuario (cpf, nome, email, senha, nascimento, rg, ativo;) VALUES (?,?,?,?,?,?,?)"
                );

                $statement->bindValue(1, $user->cpf);
                $statement->bindValue(2, $user->nome);
                $statement->bindValue(3, $user->email);
                $statement->bindValue(4, $user->senha);
                $statement->bindValue(5, $user->nascimento);
                $statement->bindValue(6, $user->rg);
                $statement->bindValue(7, $user->ativo);

                $statement->execute();

                //var_dump($statement); die();

                //encerra a conexão
                $this->connection = null;
            } catch (PDOException $e) {
                echo "ocorreram erros ao inserir o usuário";
                echo $e;
            }
            
        }
    }
    ?>