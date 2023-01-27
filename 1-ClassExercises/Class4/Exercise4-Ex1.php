<!-- 
Ronald Mercado H.
Web Server Applications
20 January 2023
LaSalle College
Exercise 4 - Ex1
-->

<!DOCTYPE html>
<html>
<body>
  <form action="" method="post">
    
    <h2>Enter a digit:</h2>
  
    <input type="text" name="number"><br>

    <input id="submitbutton" type="submit" name="send" value="SEND IT" />
  </form>
  
  <?php
    
    // Conditional if to evaluate digit
    
    if (isset($_POST["number"])) // Check if input field is filled or set
    {
        $number = $_POST["number"];
        if ($number < 0) {
            echo "You wrote a negative number";
        } elseif ($number > 0) {
            echo "You wrote a positive number";
        } else {
            echo "Number is equal to 0";
        }
    }
  ?>

</body>
</html>