<!-- 
Ronald Mercado H.
Web Server Applications
20 January 2023
LaSalle College
Lab2 - Ex1
-->

<!DOCTYPE html>
<html>
<body>
  <form action="" method="post">
    
    <h2>Lab 2: Multiple of 2 & 3</h2>
    <label for="number">Enter a positive number</label> 
    <input type="text" name="number"><br>

    <label for="submitbutton">Press to send</label>
    <input id="submitbutton" type="submit" name="send" value="SEND IT" />
  </form>
  
  <?php
    
    // Conditional if to evaluate digit
    
    if (isset($_POST["number"])) // Check if input field is filled or set
    {
        $number = $_POST["number"];

        if ($number % 2 == 0) {
            echo "Number is a multiple of 2";
        } elseif ($number % 3 == 0) {
            echo "Number is a multiple of 3";
        
        } elseif ($number % 3 == 0 && $number % 2 == 0) {
          echo "Number is a multile of 2 and 3";
        }
        else {
            echo "Number is not multiple of 2 and/or 3";
        }
    }
  ?>

</body>
</html>