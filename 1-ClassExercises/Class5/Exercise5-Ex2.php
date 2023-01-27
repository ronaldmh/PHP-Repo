<!-- 
Ronald Mercado H.
Web Server Applications
24 January 2023
LaSalle College
Class 5 - Ex2
-->

<!DOCTYPE html>
<html>
  <body>

  <?php 
        // Form to ask sides of triangle
        echo <<<_END
    
        <form action="" method="post">
        
        <h2>Class 5 - Ex2 - What kind of Triangle ?</h2>
        
        <label for="number1">Side 1</label> 
        <input type="number" name="side1"><br><br>
        
        <label for="number2">Side 2</label> 
        <input type="number" name="side2"><br><br>

        <label for="number3">Side 3</label> 
        <input type="number" name="side3"><br><br><br>

        <label for="submitbutton">Press to send</label>
        <input id="submitbutton" type="submit" name="send" value="Evaluate" /><br><br>

        </form>

        _END;
      
        // Validation set values                
        if (isset($_POST["side1"]) && isset($_POST["side2"]) && isset($_POST["side3"]))
        {
            // Getting values from POST superglobal
            $val1 = $_POST["side1"];
            $val2 = $_POST["side2"];
            $val3 = $_POST["side3"];

            if ($val1 == 0 || $val2 == 0 || $val3 == 0){
                echo("Please enter 3 values");
            }else{

            // validation different numbers
                                    
            if($val1 == $val2 && $val1 == $val3 && $val2 == $val3){
                echo("You have a Equilateral triangle");
            }elseif($val1 == $val2 || $val1 == $val3 || $val2 == $val3){
                echo("You have a Isosceles triangle");
            }else{
                echo("You have a Scalene triangle");
            }
            }              
        }      
    ?>
  </body>
</html>
