<?php

class Employee{
    public $name;
    public $salary;

    function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    function desc(){
        echo "Your name is $this->name and salary is $this->salary <br>";
    }

}

class Programmer extends Employee{
    public $lang;

    function __construct($name, $salary, $lang){
        $this->name = $name;
        $this->salary = $salary;
        $this->lang = $lang;
    }

    // This will re-write the parent method in Programmer class
    function desc(){
        echo "Your name is $this->name and salary is $this->salary and language is $this->lang <br>";
    }

}

$akif = new Employee("Akif", 12000);
$akif->desc();

$saif = new Programmer("Saif",30000,"Php");
$saif->desc();

?>