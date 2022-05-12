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
                    "INSERT INTO usuario (cpf, nome, email, senha, nascimento, rg, ativo, contrato, tipo) VALUES (?,?,?,md5(?),?,?,?,?,?)"
                );

                $statement->bindValue(1, $usuario->cpf);
                $statement->bindValue(2, $usuario->nome);
                $statement->bindValue(3, $usuario->email);
                $statement->bindValue(4, $usuario->senha);
                $statement->bindValue(5, $usuario->nascimento);
                $statement->bindValue(6, $usuario->rg);
                $statement->bindValue(7, $usuario->ativo);
                $statement->bindValue(8, $usuario->contrato);
                $statement->bindValue(9, $usuario->tipo);


                $statement->execute();

                //var_dump($statement); die();

                //encerra a conexão
                $this->connection = null;
            } catch (PDOException $e) {
                echo "ocorreram erros ao inserir o usuário";
                echo $e;
            }

        }

        public function search() {
            try {
                $statement = $this->connection->prepare("SELECT * FROM usuario");
                $statement->execute();
                $dados = $statement->fetchAll();
                $this->connection = null;

                return $dados;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao buscar os usuários";
                echo $e;
            }
        }


        public function delete($cpf) {
            try {
                $statement = $this->connection->prepare("DELETE FROM usuario WHERE cpf = ?");
                $statement->bindValue(1, $cpf);
                $statement->execute();

                $this->connection = null;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao buscar os usuários";
                echo $e;
            }
        }

        public function find($cpf, $senha) {
            try {
               // echo $cpf."<br>";
               // echo $senha."<br>";
                $statement = $this->connection->prepare("SELECT * FROM usuario WHERE cpf = ? and senha = md5(?)");
                $statement->bindValue(1, $cpf);
                $statement->bindValue(2, $senha);
                $statement->execute();
                $user = $statement->fetchAll();

                   // var_dump($user);
                   // die();

                $this->connection = null;

                return $user;
            } catch (PDOException $e) {
                echo "ocorreram erros ao procurar o usuario";
                echo $e;
            }
        }
        
    } 
?>