<?php

namespace Model;

use PDOException;

class Database
{
    private $host = 'localhost';
    private $db_name = 'societe';
    private $username = 'root';
    private $password = '';
    private $connexion = null;

    public function dbConnect()
    {
        try {
            $pdo = new \PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);

            $this->connexion = $pdo;
        } catch (PDOException $e) {
            echo 'Erreur de connexion ' . $e->getMessage();
        }

        return $this->connexion;
    }
}
