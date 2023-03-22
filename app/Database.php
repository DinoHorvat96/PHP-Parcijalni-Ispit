<?php
namespace app;

use PDO;

class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
        $dsn = 'mysql:host=' . Config::get('DB_HOST') . ';dbname=' . Config::get('DB_NAME');
        $this->connection = new PDO($dsn, Config::get('DB_USER'), Config::get('DB_PASS'));
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->connection;
    }
    
    public function query($sql) {
        return $this->connection->query($sql);
    }
}
?>