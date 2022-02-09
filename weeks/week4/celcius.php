<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="celcius">
    <form action="" method="post">
        <fieldset>
            <legend>Our Celcius Form</legend>

            <label>Enter your Celcius Value</label>
            <input type="number" name="cel">

            <input type="submit" value="Convert it">
        </fieldset>
    </form>
    <p><a href="">Reset</a></p>

    <?php
        // introduce the intval function
        // use this function when you have a non-numeric error displaying
        if (isset($_POST['cel'])) {
            //$cel = intval($_POST['cel']);
            //$far = ($cel * 9 / 5) + 32;

            $cel = $_POST['cel'];
            $cel_int = intval($cel);
            $far = ($cel_int * 9 / 5) + 32;
            if ($cel == NULL) {
                echo '<p>Please enter your Celcius Value!</p>';
            } elseif ($far <= 32) {
                echo '<p>'.$cel.' degrees celcius = '.$far.' degrees
                fahrenheit and it is pretty cold! </p>';
            } elseif ($far <= 40) {
                echo '<p>'.$cel.' degrees celcius = '.$far.' degrees
                fahrenheit and it is still pretty cold! </p>';
            } elseif ($far <= 50) {
                echo '<p>'.$cel.' degrees celcius = '.$far.' degrees
                fahrenheit and it is getting warmer! </p>';
            } elseif ($far <= 60) {
                echo '<p>'.$cel.' degrees celcius = '.$far.' degrees
                fahrenheit and it is surely getting warmer! <br> No need
                for a winter coat! </p>';
            } elseif ($far <= 75) {
                echo '<p>'.$cel.' degrees celcius = '.$far.' degrees
                fahrenheit and it is warmer! <br> And, I am reading in the
                park! </p>';
            } elseif ($far <= 90) {
                echo '<p>'.$cel.' degrees celcius = '.$far.' degrees
                fahrenheit and we are off to the beach! </p>';
            } else {
                echo '<p>'.$cel.' degrees celcius = '.$far.' degrees
                fahrenheit and it\'s <b class="hot">really hot<b>!!! </p>';
            }
        } 
    ?>
    
</body>
</html>