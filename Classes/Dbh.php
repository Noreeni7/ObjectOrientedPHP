<?php

class Dbh {
    private $host = "localhost";
    private $dbname = "";
    private $dbusername = "root";
    private $dbpassword = "Sbing254";

    protected function connect () {
        try {
            $pdo = new PDO ("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // return pdo
            return $pdo;
        } catch (PDOException $e) {
            die("Conection failed: " . $e->getMessage());
        }
    }
}