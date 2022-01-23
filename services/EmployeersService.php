<?php
require("./controllers/EmployeersController.php");
function init($val)
{
    if ($val == "GET") {
        getEmployeers();
    } else if ($val == "POST") {
    } else if ($val == "PUT") {
    } else if ($val == "DELETE") {
    } else {
        return "ERROR";
    }
}
