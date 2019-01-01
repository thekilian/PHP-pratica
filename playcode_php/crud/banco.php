<?php
class Banco {
    private $pdo;
    private $numRows; // var para armazenar n° linhas
    private $array; // var para armazenar result da query

    // conexão DB
    public function __construct($host, $dbname, $dbuser, $dbpass) {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host".$host, $dbuser, $dbpass);
        } catch(PDOException $e) {
            echo "Falhou a conexão: ".$e->getMessage();
        }
    }

    // executa, de forma livre, qq query
    public function query($sql) {
        $query = $this->pdo->query($sql);
        $this->numRows = $query->rowCount();
        $this->array = $query->fetchAll();
    }

    // n° linhas no DB
    public function numRows() {
        return $this->numRows;
    }

    // pegar result da query
    public function result($sql) {
        return $this->array;
        // $this->array = $query->fetchAll();
    }

    // inserir
    public function insert($table, $data) {
        if(!empty($table) && (is_array($data) && count($data) > 0)) {
            $sql = "INSERT INTO ".$table." SET ";
            $dados = array();
            foreach($data as $chave => $valor) {
                $dados[] = $chave." = '".addslashes($valor)."'";
            }
            $sql = $sql.implode(", ", $dados);
            // echo $sql;
            $this->pdo->query($sql);
        }
    }

    public function update($table, $data, $where = array(), $where_cond = "AND") {
        if(!empty($table) && (is_array($data) && count($data) > 0) && is_array($where)) {
            $sql = "UPDATE ".$table." SET ";
            $dados = array();
            foreach($data as $chave => $valor) {
                $dados[] = $chave." = '".addslashes($valor)."'";
            }
            $sql = $sql.implode(", ", $dados);

            if(count($where) > 0) {
                $dados = array();
                foreach($where as $chave => $valor) {
                    $dados[] = $chave." = '".addslashes($valor)."'";
                }
                $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
            }
            // echo $sql;
            $this->pdo->query($sql);
        }
    }

    public function delete($table, $where, $where_cond = "AND") {
        if(!empty($table) && (is_array($where) && count($where) > 0)) {
            $sql = "DELETE FROM ".$table;

            if(count($where) > 0) {
                $dados = array();
                foreach($where as $chave => $valor) {
                    $dados[] = $chave." = '".addslashes($valor)."'";
                }
                $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
            }
            // echo $sql;
            $this->pdo->query($sql);
            
        }
    }

}