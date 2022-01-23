<?php
require("services/EmployeersService.php");
$action = $_GET["action"];
switch ($action) {
    case "employeers":
        init($_SERVER["REQUEST_METHOD"]);
        break;
    default:
        die("error");
}
