<!-- 
Ronald Mercado H.
Web Server Applications
24 January 2023
LaSalle College
Class 5 - Ex1
-->

<!DOCTYPE html>
<html>
<body>

<?php

  // Form to ask numbers

  echo <<<_END

  <form action="" method="post">
    
    <h2>Class 5 - Ex1 - Positive and Negative Number</h2>

    <p> Please enter two numbers to test</P>    
  
    <label for="number1">Number 1 >> </label> 
    <input type="number" name="number1">
    
    <label for="number2">Number 2 >> </label> 
    <input type="number" name="number2"><br><br>
    
    <input id="submitbutton" type="submit" name="send" value="Evaluate" /><br><br>

  </form>

  _END;

  ?>
  
  <?php
    
    // Validation of numbers 
    
    if (isset($_POST["number1"]) && isset($_POST["number2"]))
    {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        if ($number1 < 0 && $number2 <0){   

            echo "Number $number1 and $number2 are negative";

        }elseif ($number1 < 0 && $number2 > 0) {
            
            echo "Number $number1 is negative, number $number2 is positive";

        }elseif($number1 > 0 && $number2 < 0){

            echo "Number $number1 is positive, number $number2 is negative";
            
        }elseif($number1 == "" && $number2 == ""){

            echo "Enter two numbers";
        
        }else{
            echo "Number $number1 and $number2 are positive";
        }
    }
  ?>

</body>
</html>