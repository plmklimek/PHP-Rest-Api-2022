<?php
class Employeers
{
    private $id = 0;
    private $name = "";
    private $surname = "";
    private $age = 0;
    function __construct($id, $name, $surname, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->$surname = $surname;
        $this->age = $age;
    }
    function getEmployeer()
    {
        return [$this->id, $this->name, $this->surname, $this->age];
    }
}
