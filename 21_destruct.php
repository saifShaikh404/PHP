<?php

class Student{
    // Properties
    public $name;
    public $grade;

    // Constructor
    function __construct($name, $grade){
        $this->name = $name;
        $this->grade = $grade;
    }

    //Methods
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
    
    // Destructor
    function __destruct(){
        echo "<br> Data Deleted <br>";
    }

}

echo "Student 1 <br>";
$saif = new Student("Saif Shaikh", "A");
$saif->Name();
$saif->Maths(72);
$saif->Science(51);
$saif->English(93);
$saif->Grade();
echo "<br><br>";

echo "Student 2 <br>";
$akif = new Student("Akif Shaikh", "F");
$akif->Name();
$akif->Maths(31);
$akif->Science(41);
$akif->English(25);
$akif->Grade();
echo "<br><br>";

echo "Student 3 <br>";
$altamas = new Student("Altamas Shaikh", "A++");
$altamas->Name();
$altamas->Maths(79);
$altamas->Science(69);
$altamas->English(90);
$altamas->Grade();
echo "<br><br>";

echo "Student 4 <br>";
$rohit = new Student("Rohit Patel", "B");
$rohit->Name();
$rohit->Maths(51);
$rohit->Science(72);
$rohit->English(85);
$rohit->Grade();
echo "<br><br>";

?>