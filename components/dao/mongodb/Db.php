<?php

// Singleton to connect db.
class Db
{
// Hold the class instance.
    private static $instance = null;
    private $conn;

// The db connection is established in the private constructor.
    private function __construct()
    {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $this->conn = $client->sportdb;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Db();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

//$singleton = Singleton::getInstance();
//$db = $singleton->getConnection();