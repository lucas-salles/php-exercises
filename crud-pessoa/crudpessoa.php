<?php
  require_once('config.php');

  class CrudPessoa {
    public function __construct() {
      $dsn = DB.":dbname=".DBNAME.";host=".DBHOST;

      try {
        $this->connection = new PDO($dsn, DBUSER, DBPWD);
      } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
      }
    }

    public function create($name, $cpf) {
      $sql = "INSERT INTO pessoa (name, cpf) VALUES ('${name}', '${cpf}');";

      try {
        $this->connection->exec($sql);
        return $this->connection->lastInsertId();
      } catch(PDOExecption $e) { 
        $this->connection->rollback(); 
        print "Error!: " . $e->getMessage(); 
        return null;
      } 
    }

    public function readAll() {
      $sql = "SELECT * FROM pessoa";
      $pdoStm = $this->connection->query($sql);
      return $pdoStm ? $pdoStm->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public function update($name, $cpf, $id) {
      $sql = "UPDATE pessoa
              SET name='${name}', cpf='${cpf}'
              WHERE id=${id}";
        
      try {
        return $this->connection->exec($sql);
      } catch(PDOExecption $e) { 
        $this->connection->rollback(); 
        print "Error!: " . $e->getMessage(); 
      } 
    }

    public function delete($id) {
      $sql = "DELETE FROM pessoa WHERE id=${id}";
          
      try {
        return $this->connection->exec($sql);
      } catch(PDOExecption $e) { 
        $this->connection->rollback(); 
        print "Error!: " . $e->getMessage(); 
      }
    }
  }
?>