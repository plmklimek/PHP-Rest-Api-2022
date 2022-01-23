<?php
require("./controllers/EmployeersController.php");
function init($val)
{
    if ($val == "GET") {
        getEmployeers();
    } else if ($val == "POST") {
        createEmployeers($_GET["name"], $_GET["surname"], $_GET["age"]);
    } else if ($val == "PUT") {
        updateEmployeers($_GET["id"], $_GET["name"], $_GET["surname"], $_GET["age"]);
    } else if ($val == "DELETE") {
    } else {
        return "ERROR";
    }
}
