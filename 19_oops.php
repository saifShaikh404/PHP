<?php

class Student{
    // Properties
    public $name;
    public $grade;

    // Methods
    function setProps($name, $grade){
        $this->name = $name;
        $this->grade = $grade;
    }

    function Maths($marks){
        echo "Your marks is Maths is :- " . $marks . ".<br>";
    }

    function Science($marks){
        echo "Your marks is Science is :- " . $marks . ".<br>";
    }

    function English($marks){
        echo "Your marks is English is :- " . $marks . ".<br>";
    }

    function Name(){
        echo $this->name . " Exams Marksheet <br>";
    }

    function Grade(){
        echo $this->grade . " Your Grade <br>";
    }

}

$saif = new Student();
$saif->setProps("Saif Shaikh", "A");
$saif->Name();
$saif->Maths(72);
$saif->Science(51);
$saif->English(93);
$saif->Grade();


?>