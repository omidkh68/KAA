<?php

class dbConn{

    protected static $db;

    public function __construct() {

        try {
            self::$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DATABASE."", DB_USER, DB_PASSWORD);
        }
        catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }

    }

    public static function getConnection() {

        if (!self::$db) {
            new dbConn();
        }

        self::$db->exec('SET character_set_database=UTF8');
        self::$db->exec('SET character_set_client=UTF8');
        self::$db->exec('SET character_set_connection=UTF8');
        self::$db->exec('SET character_set_results=UTF8');
        self::$db->exec('SET character_set_server=UTF8');
        self::$db->exec('SET names UTF8');

        return self::$db;
    }

}
