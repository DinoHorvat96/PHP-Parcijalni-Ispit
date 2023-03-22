<?php
namespace app;

class Config {
    private static $config = array();
    
    public static function get($key) {
        if (empty(self::$config)) {
            self::$config = include(__DIR__ . '/../config.php');
        }
        
        return isset(self::$config[$key]) ? self::$config[$key] : null;
    }
}
?>