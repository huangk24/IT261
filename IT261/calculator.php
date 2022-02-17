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
        <input type="text" name="name">

        <label>Total miles driving?</label>
        <input type="number" name="mile">

        <label>How fast do you typically drive?</label>
        <input type="number" name="speed">

        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hour">

        <label>Price of gas</label> 
        <ul>
            <li>
                <input type="radio" name="price" value="3">$3.00
            </li>
            <li>
                <input type="radio" name="price" value="3.5">$3.50
            </li>
            <li>
                <input type="radio" name="price" value="3">$4.00
            </li>
        </ul>
        <label>Fuel efficiency</label> 
        <select name="efficiency">
            <option value="" NULL>Select one</option>
            <option value="great">Great @ 40mpg</option>
            <option value="good">Good @ 30mpg</option>
            <option value="average">Average @ 20mpg</option>
            <option value="terrible">Terrible @ 10mpg</option>
        <input type="submit" value="Calculate">
        <button><a href="">Reset</a></button>
    </form>
</body>
</html>