<?php
// introduction to our variables
// as well as syntax
// What is variable? A variable is a container

$name = 'Kai';
echo $name;
echo '<br>';
$name = 'Huang';
echo $name;
echo '<br>';
echo 'My first name is $name';
echo '<br>';
echo "My first name is $name";
echo '<br>';
// I like single quotes because later on we will be placing php inside our html
// values <a href=""            
echo 'My first name is ' .$name. ' ';
echo '<br>';

$temp = 45;
echo 'The temperature today was ' .$temp. ' degrees ';
echo '<br>';

$body_temp = 98.6;
echo $body_temp;

$vehicle = 'truck';
echo '<br>';
$x = 20;
$y = 30;
$z = $x * $y;
echo $z;

echo '<br>';
$pie = 3.14;
$radius = 10;
$circumference = (2 * $pie) * $radius;
echo $circumference;

echo '<br>';

$celcius = 4;
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
// ceil is a function that will round up
// floor is a function that will round down
echo $friendly_far;
echo '<br>';

$celcius = 4;
$far = ($celcius * 9/5) + 32;
// ceil is a function that will round up
// floor is a function that will round down
echo ceil($far);
echo '<br>';

$money = 10330;
$divide = 71;
$amount = $money / $divide;
echo 'I now have <b>$' .number_format($amount, 2). ' </b>';
echo '<br>';
$friendly_amount = number_format($amount, 2);
echo '<p>I now have <b>$' .$friendly_amount. ' </b> dollars!</p>';

?>

<h1>Now we will be playing with the concatenation operator</h1>

<?php

$first_name = 'Kai';
$last_name = 'Huang';
echo '<br>';
echo $first_name;
echo '<br>';
echo $last_name;
echo '<br>';

$name = 'Kai';
$name .= ' Huang';
echo $name;
echo '<br>';

$x = 30;
$y = 3;
$z = $x / $y;
echo $z;
echo '<br>';

$x = 30;
$x /= 3;
echo $x;