<?php
/*
Ronald Mercado H.
Web Server Applications
17 January 2023
Class Exercise 2 - Server
LaSalle College

*/

// debug
/*
echo "<pre>";
var_dump($_POST);
echo "</pre>";
*/

$article = $_POST["article"];
$amount = $_POST["amount"];
$cost = $_POST["cost"];

/*
define("TVQRATE",0.09975);
define("TPSRATE", 0.05);
*/

// Calculation 

$subTotal = $amount * $cost;
$tpsTax = $subTotal * 0.05;
$tvqTax = $subTotal * 0.09975;
$total = $subTotal + $tpsTax + $tvqTax;

// output
echo ("You bought $amount $article that cost $cost CA$ each.
The SUB-TOTAL due for your purchase is $subTotal CA$.
The TOTAL due for your purchase is $total CA$.");

?>

</br></br>
<a href="./formGET_POST.php">Back to the form</a>



