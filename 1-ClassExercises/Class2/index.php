<?php

/*
Ronald Mercado H.
Web Server Applications
13 January 2023
LaSalle College
*/


// Exercise 1
echo"Exercise Number 1\n";
echo("</br>");

// Exercise 2

/*
    PHP scripts are mainly used for: 
    1-Server-side scripting
    2-Command-line scripting
    3-Writing desktop applications
*/

// Exercise 3

echo "<p align=\"center\">Copyright You&Me, 2022</p>";

// Exercise 4

$month_income = 10000;
$month_income = $month_income * 12;
echo"Year Income : $month_income";
echo("</br>");

?>


<!DOCTYPE html >
<!-- Exercise 5 - PHP inside HTML -->

<html>
    <head>
    </head>
    <body>
        <?php
            //Assign value to variable
            $message='Welcome';
        ?>
        <h1>My first word is: <?php echo $message;  //Display $message ?> </h1>

    </body>
</html>

<?php

// Exercise 2

//First name of the inventor of php”
$name1 = "Rasmus"; 
//Last name of the inventor of php 
$lastName1 = "Landorf";
echo ("$lastName1 $name1 is the inventor of the programming language PHP");

// Exercise 3


$b="PHP7";
var_dump($b);
echo (gettype($b)) . "<br>";

$a[] = &$b;
var_dump($a);
echo (gettype($a)) . "<br>";

$c="7th version of PHP" . "<br>";

echo (gettype($c)) . "<br>";

$d = $c*22;
var_dump($d);
echo (gettype($d)) . "<br>";

$b.= $c;
var_dump($b);
echo (gettype($b)) . "<br>";

$c*=$d;
var_dump($c);
echo (gettype($c)) . "<br>";

$a[0]="MySQL";
echo (gettype($a)) . "<br>";
var_dump($a);






