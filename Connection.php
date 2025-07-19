<?php

$host = "localhost";
$dbname = "filmname";
$username = "Arsham";
$password = "6070h8531S@";

class Connection {
    public static function make($host, $dbname, $username, $password){
        $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    
            return new PDO($dsn, $username, $password, $options);
            
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}


return Connection::make($host, $dbname, $username, $password)

?>