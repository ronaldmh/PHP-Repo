<!-- 
Ronald Mercado H.
Web Server Applications
20 January 2023
LaSalle College
Exercise 4 - Ex2
-->

<!DOCTYPE html>
<html>
<body>
  <form action="" method="post">
    
    <h2>Enter two digits:</h2>
  
    <label for="number1">Number 1</label> 
    <input type="text" name="number1"><br>
    
    <label for="number2">Number 2</label> 
    <input type="text" name="number2"><br>

    <input id="submitbutton" type="submit" name="send" value="SEND IT" />

  </form>
  
  <?php
    
    // Conditional if to evaluate digit
    
    if (isset($_POST["number1"]) && isset($_POST["number2"])) // Check if input field is filled or set
    {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        if ($number1 == $number2){   

            echo "You enter the same number $number1. There is no gap. Try again";

        }elseif ($number1 != $number2 && $number1 > $number2) {
            
            $result = abs($number1 - $number2);
            echo "You entered $number1 and $number2 <br>";
            echo "The gap between $number1 and $number2 is $result <br>";
            echo("$number1 is greater than $number2");

        }else{
            $result = abs($number2 - $number1);
            echo "You entered $number1 and $number2 <br>";
            echo "The gap between $number1 and $number2 is $result <br>";
            echo("$number2 is greater than $number1");
        }
    }
  ?>

</body>
</html>