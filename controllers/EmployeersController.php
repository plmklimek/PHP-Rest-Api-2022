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
function createEmployeers($name, $surname, $age)
{
    $mysqlController = MysqlController::getController();
    $sql = "INSERT INTO employeers VALUES (NULL,?,?,?)";
    $statement = $mysqlController->prepare($sql);
    die(json_encode($statement->execute([$name, $surname, $age])));
}
function updateEmployeers($id, $name, $surname, $age)
{
    $mysqlController = MysqlController::getController();
    $sql = "UPDATE employeers SET name = ?, surname = ?, age = ? WHERE id = ? ";
    $statement = $mysqlController->prepare($sql);
    die(json_encode($statement->execute([$name, $surname, $age, $id])));
}
