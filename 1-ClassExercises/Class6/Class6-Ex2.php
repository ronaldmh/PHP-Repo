<!-- 
Ronald Mercado H.
Web Server Applications
27 January 2023
LaSalle College
Class 6 - Ex2
-->

<!DOCTYPE html>
<html>
  <body>

  <?php 
        // Form to ask for number
        echo <<<_END
    
        <form action="" method="post">
        
        <h2>Class 6 - Ex2 - This will display each letter</h2>
        
        <label for="number1">Enter a text</label> 
        <input type="text" name="value1"><br><br>       
        

        <label for="submitbutton">Press to send</label>
        <input id="submitbutton" type="submit" name="send" value="Evaluate" /><br><br>

        </form>

        _END;
      
        // Validation set values                
        if (isset($_POST["value1"]))
        {
            // Getting values from POST superglobal
            $text = $_POST["value1"];          

            if ($text == ""){
                echo("Please enter a text");
            }else
            {                
                $text = strtoupper($text);
                echo("You wrote: <br><br>");

                // For loop
                for($i = 0; $i < strlen($text); $i++){

                    echo("<li> Letter $i : $text[$i]</li><br>");
                    
                   
                }
            }

        }      
    ?>
  </body>
</html>
