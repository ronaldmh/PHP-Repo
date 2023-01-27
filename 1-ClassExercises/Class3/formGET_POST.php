<?php

/*
Ronald Mercado H.
Web Server Applications
17 January 2023
Class Exercise 2 - Form
LaSalle College

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Class 3</title>
</head>
<body>
    <h1>Exercise Form</h1>
    <?php
    echo "<br>";
    echo "<form action='./serverGET_POST.php' method='post'>";    

    echo"<label for='name'>Article</label>";
    echo"<input type='text' name='article' id='article'>";

    echo"<label for='age'>Amount</label>";
    echo"<input type='number' name='amount' id='amount'>";

    echo"<label for=age'>Cost</label>";
    echo"<input type='number' name='cost' id='cost'>";

    echo"<button type='submit'>Send</button>";

    echo"</form>";
    ?>
</body>
</html>


