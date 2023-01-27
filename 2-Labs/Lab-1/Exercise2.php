<!-- 
Ronald Mercado H.
Web Server Applications
14 January 2023
LaSalle College
Exercise2
-->


<!DOCTYPE html>
<html> 
    <head> 
        <style>td {border: solid 1px #000000;}</style>
    </head> 
    
    <body>

        <?php
        echo <<<_END

        <h1>3 Primary Colors RGB</h2>
        <table> 
            <tr>
                <td><h2>Red</h2></td> 
                <td style="width:63px; background-color:#ff0000;"></td>
            </tr>
             
            <tr>             
                <td><h2><?php echo("Blue-PHP");?></h2></td><!-- Text Blue with PHP embedded in HTML -->                
                <td <?php echo "style ='background-color:#0000ff' , 'width:63px'" ?> ></td><!-- Background-color Blue with PHP embedded in HTML -->  
            </tr>
            
            <tr>        
                <td><h2><?php echo("Green");?></h2></td>
                <td <?php echo "style = \"width:63px; background-color:#008000;\"" ?> ></td> <!-- Background-color Blue with PHP embedded in HTML using double quotes -->  
            </tr>    
        </table>
        
        _END;
        ?>

    </body>

    

</html>