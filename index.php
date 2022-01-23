<?php
require("controllers/MysqlController.php");
$mysqlController = MysqlController::getController();
$action = $_GET["action"];
switch ($action) {
    case "employeers":
        die("Hello");
        break;
    default:
        die("error");
}
