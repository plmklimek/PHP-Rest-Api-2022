<?php
class MysqlController
{
    public static function getController()
    {
        require("./conf.php");
        $dsn = "mysql:host=$address;dbname=$DB;charset=UTF8";
        try {
            $pdo = new PDO($dsn, $user, $passwd);
            return $pdo;
        } catch (PDOException $e) {
            return $e;
        }
    }
}
