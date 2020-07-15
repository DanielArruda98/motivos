<?php

    require_once 'Conexao.class.php';

    class Motivo {

        /*======================================================================================*/
        
        // Executando
        public function cadastrar($titulo, $texto) {
            $conexao = new Conexao();
            $connection = $conexao->conectar();

            try {
                
                $sql = "INSERT INTO motivos VALUES (null, :titulo, :texto)";

                $consulta = $connection->prepare($sql);

                $consulta->bindValue(":titulo", $titulo);
                $consulta->bindValue(":texto", $texto);

                if ($consulta->execute()) {
                    return true;
                } 

            } catch (PDOException $e) {
                echo "Erro de cadastrar motivo: " . $e->getMessage();
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
        
        public function listar() {
            $conexao = new Conexao();
            $connection = $conexao->conectar();

            try {
                $sql = "SELECT * FROM motivos";

                $consulta = $connection->prepare($sql);
                $consulta->execute();
                $vl = $consulta->rowCount();
        
                if ($vl > 0) {
                    return $consulta->fetchAll();
                } 

            } catch (PDOException $e) {
                echo "Erro de cadastrar motivo: " . $e->getMessage();
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            }   
        }

        public function consultar($start) {
            $conexao = new Conexao();
            $connection = $conexao->conectar();

            try {
                $sql = "SELECT * FROM motivos ORDER BY id_motivo LIMIT 3 OFFSET $start";

                $consulta = $connection->prepare($sql);

                $consulta->execute();
                $vl = $consulta->rowCount();
        
                if ($vl > 0) {
                    return $consulta->fetchAll();
                } 

            } catch (PDOException $e) {
                echo "Erro de cadastrar motivo: " . $e->getMessage();
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            }   
        }

        public function excluir($id) {
            $conexao = new Conexao();
            $connection = $conexao->conectar();

            try {
                $sql = "DELETE FROM motivos WHERE id_motivo = :id";

                $consulta = $connection->prepare($sql);
                
                $consulta->bindValue(":id", $id);
        
                if ($consulta->execute()) {
                    return true;
                } 

            } catch (PDOException $e) {
                echo "Erro de cadastrar motivo: " . $e->getMessage();
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            } 
        }
    }

?>