<!-- 
Ronald Mercado H.
Web Server Applications
20 January 2023
LaSalle College
Exercise 4 - Ex3
-->

<!DOCTYPE html>
<html>
<body>
  <form action="" method="post">
    
    <h2>Weekdays:</h2>
  
    <label for="day">Enter a day</label> 
    <input type="text" name="day"><br> 

    <label for="submitbutton">Press to send</label>
    <input id="submitbutton" type="submit" name="send" value="SEND IT" />

  </form>
  
<?php

    if (isset($_POST["day"]))
    {
        
        $day = $_POST["day"];

        //echo($day); print variable to debug
        
        // switch statement 
        switch ($day) {

            case "Monday":
                echo "You entered Monday. It is the first day of the week. Try again.";
                break;
            case "Tuesday":
                echo "You entered Tuesday. It is the second day of the week. Try again.";
                break;
            case "Wednesday":
                echo "You entered Wednesday. It is the third day of the week. Try again.";
                break;
            case "Thursday":
                echo "You entered Thursday. It is the fourth day of the week. Try again.";
                break;
            case "Friday":
                echo "You entered Friday. It is the fifth day of the week. Try again.";
                break;
            case "Saturday":
                echo "You entered Saturday. It is the sixth day of the week. Try again.";
                break;
            case "Sunday":
                echo "You entered Sunday. It is the seventh day of the week. Try again.";
                break;
            default:                
                echo "It is not a weekday, Try again";
        } 

    } 
       
?>

</body>
</html>