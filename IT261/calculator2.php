<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="css/calculator-style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My Travel Calculator!</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

        <label>Total miles driving?</label>
        <input type="number" name="mile" value="<?php if(isset($_POST['mile'])) echo htmlspecialchars($_POST['mile']) ;?>">

        <label>How fast do you typically drive?</label>
        <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hour" value="<?php if(isset($_POST['hour'])) echo htmlspecialchars($_POST['hour']) ;?>">

        <label>Price of gas</label> 
        <ul>
            <li>
                <input type="radio" name="price" value="3"
                <?php 
                        if (isset($_POST['price']) && $_POST['price'] == 3)
                        echo 'checked = "checked" ';
                ?>>$3.00
            </li>
            <li>
                <input type="radio" name="price" value="3.5"
                <?php 
                        if (isset($_POST['price']) && $_POST['price'] == 3.5)
                        echo 'checked = "checked" ';
                ?>>$3.50
            </li>
            <li>
                <input type="radio" name="price" value="4"
                <?php 
                        if (isset($_POST['price']) && $_POST['price'] == 4)
                        echo 'checked = "checked" ';
                ?>>$4.00
            </li>
        </ul>
        <label>Fuel efficiency</label> 
        <select name="efficiency">
            <option value="" NULL
                <?php 
                        if (isset($_POST['efficiency']) && $_POST['efficiency'] == NULL)
                        echo 'selected = "unselected" ';
                ?>>Select one</option>
            <option value="great"
                <?php 
                    if (isset($_POST['efficiency']) && $_POST['efficiency'] == 'great')
                    echo 'selected = "selected" ';
                ?>>Great @ 40mpg</option>
            <option value="good"
                <?php 
                    if (isset($_POST['efficiency']) && $_POST['efficiency'] == 'good')
                    echo 'selected = "selected" ';
                ?>>Good @ 30mpg</option>
            <option value="average"
                <?php 
                    if (isset($_POST['efficiency']) && $_POST['efficiency'] == 'average')
                    echo 'selected = "selected" ';
                ?>>Average @ 20mpg</option>
            <option value="terrible"
                <?php 
                    if (isset($_POST['efficiency']) && $_POST['efficiency'] == 'terrible')
                    echo 'selected = "selected" ';
                ?>>Terrible @ 10mpg</option>
        <input type="submit" value="Calculate">
        <button><a href="">Reset</a></button>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            echo '<span class="error">Please fill out your name!</span>';
        }
        if (empty($_POST['mile'])) {
            echo '<span class="error">Please fill out your mile! A "Zero" value will not work!</span>';
        }
        if (empty($_POST['speed'])) {
            echo '<span class="error">Please fill out your speed! A "Zero" value will not work!</span>';
        }
        if (empty($_POST['hour'])) {
            echo '<span class="error">Please fill out your hour! A "Zero" value will not work!</span>';
        }
        if (empty($_POST['price'])) {
            echo '<span class="error">Please choose your gas price!</span>';
        }
        if ($_POST['efficiency'] == NULL) {
            echo '<span class="error">Please choose your fuel efficiency</span>';
        }

        if (isset($_POST['name'],
                  $_POST['mile'],
                  $_POST['speed'],
                  $_POST['hour'],
                  $_POST['efficiency'])) {
            $name       = $_POST['name'];
            $mile       = floatval($_POST['mile']);
            $speed      = floatval($_POST['speed']);
            $hour       = floatval($_POST['hour']);
            $efficiency = $_POST['efficiency'];
        }
    } // close server
    ?>
</body>
</html>