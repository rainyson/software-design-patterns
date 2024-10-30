<?php

namespace App\Singleton\DB;

class Connection
{
    private static $instance = null;
    private $conn,
        $host = 'db',
        $username = 'root',
        $password = '987654321',
        $dbname = 'laraTest';

    private function __construct()
    {
        $this->conn = new \PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Connection();
        }
        return self::$instance;
    }
}