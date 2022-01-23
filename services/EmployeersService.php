<?php
require("./controllers/EmployeersController.php");
function init($val)
{
    if ($val == "GET") {
        getEmployeers();
    } else if ($val == "POST") {
        createEmployeers($_GET["name"], $_GET["surname"], $_GET["age"]);
    } else if ($val == "PUT") {
    } else if ($val == "DELETE") {
    } else {
        return "ERROR";
    }
}
