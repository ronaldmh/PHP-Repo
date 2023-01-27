<!-- 
Ronald Mercado H.
Web Server Applications
27 January 2023
LaSalle College
Class 6 - Ex1
-->

<!DOCTYPE html>
<html>
  <body>

  <?php 
        // Form to ask for number
        echo <<<_END
    
        <form action="" method="post">
        
        <h2>Class 6 - Ex1 - Multiplication Table </h2>
        
        <label for="number1">Number 1</label> 
        <input type="number" name="value1"><br><br>       
        

        <label for="submitbutton">Press to send</label>
        <input id="submitbutton" type="submit" name="send" value="Evaluate" /><br><br>

        </form>

        _END;
      
        // Validation set values                
        if (isset($_POST["value1"]))
        {
            // Getting values from POST superglobal
            $val1 = $_POST["value1"];          

            if ($val1 == 0 ){
                echo("Please enter a positive number");
            }else
            {
                
                // For loop
                for($i = 1; $i <= 10; $i++){
                    echo $val1 . " x " . $i . " = " . ($val1*$i) . "<br>";
                }
                          

                /*while loop
                $i = 1;
                while($i <= 10){
                    echo $val1 . " x " . $i ." = " . ($val1 * $i) . "<br>";
                    $i++;
                }
                */                

                /*
                //do-while loop
                    $i = 1;
                    do{
                        echo $val1 ." x ".$i." = ".($val1 *$i)."<br>";
                        $i++;
                    }while($i <= 10)
                */

            }

        }      
    ?>
  </body>
</html>
