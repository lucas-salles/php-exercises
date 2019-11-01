<?php
    require_once('config.php');

    class HostCrud {
        public function __construct() {
            $dsn = DB.":dbname=".DBNAME.";host=".DBHOST;
            try {
                $this->connection = new PDO($dsn, DBUSER, DBPWD);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

        public function readAll() {
            $sql = "SELECT * FROM host";
            $pdoStm = $this->connection->query($sql);
            return $pdoStm ? $pdoStm->fetchAll(PDO::FETCH_ASSOC) : null;
        }
    }



    $test = new HostCrud();
    print_r($test->readAll());
?>