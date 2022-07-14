<?php
require_once 'Config.php';
class Connection {
    public static function getConnection($host, $dbName, $userName, $pass){
        $dns = "mysql:host=$host;dbName=$dbName;charset=UTF*";
        try {
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
                
        return new PDO($dns, $userName, $pass, $option); 
        }catch (PDOException $ex) {
            die($ex->getMessage());
            
        }
    }
}
return Connection::getConnection($host, $dbName, $userName, $pass);
?>