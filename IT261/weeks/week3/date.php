<?php
// this will introduce you to the date function

echo date('l');
echo '<br>';
// l = day
// j = number
// F = month, i.e. January
// Y = year

echo date('l, F j, Y');
echo '<br>';
echo date('l, F j, Y, h:i A');

date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date('l, F j, Y, h:i A');
echo '<br>';

// If it is early in the morning, echo good morning
// If it is sometime in the afternoon, echo good afternoon
// If it is sometime in the evening, echo good evening

// H is military time
$our_date = date('H:i');
$friendly_time = date('h:i A');
$name = 'Kai';
echo $our_date;
echo '<br>';

if ($our_date <= 11) {
    echo '<h1>Good Morning, '.$name.'</h1><p>It is '.$friendly_time.'</p>';
} elseif ($our_date <= 17) {
    echo '<h1>Good Afternoon, '.$name.'</h1><p>It is '.$friendly_time.'</p>';
} else {
    echo '<h1>Good Evening, '.$name.'</h1><p>It is '.$friendly_time.'</p>';
}
