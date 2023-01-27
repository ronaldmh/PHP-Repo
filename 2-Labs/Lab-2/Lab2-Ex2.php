<!-- 
Ronald Mercado H.
Web Server Applications
21 January 2023
LaSalle College
Lab2 - Ex2
-->

<!DOCTYPE html>
<html>
  <body>
    <form action="" method="post">
      
    <h2>Lab 2: Order a number</h2>
    
      <label for="number1">Number 1</label> 
      <input type="text" name="number1"><br>
      
      <label for="number2">Number 2</label> 
      <input type="text" name="number2"><br>

      <label for="number3">Number 3</label> 
      <input type="text" name="number3"><br>

      <label for="submitbutton">Press to send</label>
      <input id="submitbutton" type="submit" name="send" value="SEND IT" />

    </form>
    
    <?php
      
        // Validation set values                
        if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["number3"]))
        {
            // Getting values from POST superglobal
            $num1 = $_POST["number1"];
            $num2 = $_POST["number2"];
            $num3 = $_POST["number3"];

            // validation different numbers       
            if($num1 == $num2 || $num1 == $num3 || $num2 == $num3){
                echo '<p>Numbers must to be different integers.</p>';

            // Validation multiple options between numbers   
            }else{
                if($num1 > $num2){
                    if($num1 > $num3){
                        if($num2 > $num3){
                        echo "numbers: $num3 $num2 $num1"; 
                    }else{
                        echo "numbers: $num2 $num3 $num1"; 
                    }
                }else{
                    echo "numbers: $num2 $num1 $num3";
                }
            }else{
                if($num1 > $num3){
                    if($num2 > $num3){                    
                        echo "numbers: $num3 $num1 $num2";                                     
                    }else{
                        echo "numbers: $num1 $num3 $num2"; 
                    }
                }else{
                    if($num2 > $num3){
                        echo "numbers: $num1 $num3 $num2";
                    }else{
                        echo "numbers: $num1 $num2 $num3";
                    } 
                }
            }     
        }
    }            
    ?>
  </body>
</html>