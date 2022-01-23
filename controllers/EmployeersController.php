<?php
require("controllers/MysqlController.php");
function getEmployeers()
{
    $mysqlController = MysqlController::getController();
    $sql = "SELECT * FROM employeers";
    $statement = $mysqlController->query($sql);
    $result = [];
    while ($row = $statement->fetch()) {
        array_push($result, ["id" => $row["id"], "name" => $row["name"], "surname" => $row["surname"], "age" => $row["age"]]);
    }
    die(json_encode($result));
}
