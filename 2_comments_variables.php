<?php

//Types of variables in php
/*
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
 */

 //String
 $name = 'Saif';
 echo $name; 
 echo '<br>';

 //Integer
 $age = 21;
 echo $age;
 echo '<br>';

 //Float
 $cgpa = 6.5;
 echo 'CGPA is ',$cgpa;
 echo '<br>';

 //Boolean
 $conditions = true;
 echo var_dump($conditions);
 echo '<br>';

 $conditions_false = false;
 echo var_dump($conditions_false);
 echo '<br>';

 //Array
 $sets = array('One','Two','Three');
 echo $sets[0];
 echo '<br>';
 echo $sets[1];
 echo '<br>';
 echo $sets[2];
 echo '<br>';
 echo var_dump($sets);
 echo '<br>';

 //NULL
 $Var = NULL;
 echo var_dump($Var);
?>