<!DOCTYPE HTML>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<!-- add red color -->
<style>
    .error {
        color: red;
    }
</style>
</head>
<body>
<h1>Adder.php</h1> 
    <!-- Add method -->
    <form action="" method="post">
        <!-- Add a open label tag -->
        <label>Enter the first number:</label>

        <!-- Fix name value -->
        <input type="text" name="num1">
        <br>

        <!-- Fix label tag -->
        <label>Enter the second number:</label>
        <input type="text" name="num2">
        <br>

        <!-- Fix type error and closing " -->
        <input type="submit" value="Add Em!!!"> 
    </form>

<?php

// adder-wrong.php

// Move php after html

if (isset($_POST['num1'],
          $_POST['num2'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    // remove -
    $myTotal = $num1 + $num2;
    // Fit typo and missing quotation mark
    echo '<h2>You added '.$num1.' and '.$num2.'';
    echo '<p> and the answer is <br><b class="error">'.$myTotal.'</b>!</p>';
    echo '<p><a href="">Reset page</a>';
}
// remove extra '{'

?>

</body>
</html>

