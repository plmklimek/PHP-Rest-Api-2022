<?php
require("controllers/MysqlController.php");
require("modals/EmployeersModal.php");
function getEmployeers()
{
    $mysqlController = MysqlController::getController();
    $sql = "SELECT * FROM employeers";
    $statement = $mysqlController->query($sql);
    $result = [];
    while ($row = $statement->fetch()) {
        $employeers = new Employeers($row["id"], $row["name"], $row["surname"], $row["age"]);
        array_push($result, $employeers->getEmployeer());
    }
    die(json_encode($result));
}
function createEmployeers($name, $surname, $age)
{
    $mysqlController = MysqlController::getController();
    $sql = "INSERT INTO employeers VALUES (NULL,?,?,?)";
    $statement = $mysqlController->prepare($sql);
    if ($statement->execute([$name, $surname, $age]) == true) {
        die(["status" => "Dodano"]);
    } else {
        die(["error" => "error"]);
    }
}
function updateEmployeers($id, $name, $surname, $age)
{
    $mysqlController = MysqlController::getController();
    $sql = "UPDATE employeers SET name = ?, surname = ?, age = ? WHERE id = ? ";
    $statement = $mysqlController->prepare($sql);
    if ($statement->execute([$name, $surname, $age, $id]) == true) {
        die(["status" => "Edytowano"]);
    } else {
        die(["error" => "error"]);
    }
}
function removeEmployeers($id)
{
    $mysqlController = MysqlController::getController();
    $sql = "DELETE FROM employeers WHERE id = ?";
    $statement = $mysqlController->prepare($sql);
    if ($statement->execute([intval($id)]) == true) {
        die(["status" => "Usunieto"]);
    } else {
        die(["error" => "error"]);
    }
}
