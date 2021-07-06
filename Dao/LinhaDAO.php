<?php
    include '../Persistence/ConnectioDB.php';

    class LinhaDAO {
        private $connection = null;

        public function __construct() {
            $this->connection = ConnectionDB::getInstance();
        }

        public function create($linhas) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO linhas (sim, numero, data) VALUES (?,?,?)"
                );

                $statement->bindValue(1, $linhas->sim);
                $statement->bindValue(2, $linhas->numero);
                $statement->bindValue(3, $linhas->data);



                $statement->execute();

              // var_dump($statement); die();
              echo "linha cadastrtada com sucesso!!!";
                //encerra a conexão
                $this->connection = null;
            } catch (PDOException $e) {
                echo "ocorreram erros ao inserir a linha";
                echo $e;
            }

        }

        public function search() {
            try {
                $statement = $this->connection->prepare("SELECT * FROM linhas");
                $statement->execute();
                $dados = $statement->fetchAll();
                $this->connection = null;

                return $dados;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao buscar os usuários";
                echo $e;
            }
        }


        public function delete($sim) {
            try {
                $statement = $this->connection->prepare("DELETE FROM linhas WHERE sim = ?");
                $statement->bindValue(1, $sim);
                $statement->execute();

                $this->connection = null;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao buscar as linhas";
                echo $e;
            }
        }
    } 
?>