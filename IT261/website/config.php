<?php
// We need to define the page that we are on as the page

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Our Home Page';
        $body = 'home';
        $headline = 'Welcome to our Home Page';
        break;
    case 'daily.php':
        $title = 'Our Daily Page';
        $body = 'daily inner';
        $headline = 'Welcome to Daily Page';
        break;
    case 'contact.php':
        $title = 'Our Contact Page';
        $body = 'contact inner';
        $headline = 'Contact us today!';
        break;
}

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Monday':
        $day = 'Monday';
        $car = '<h2>Porsche Panamera GTS</h2>';
        $pic = 'panamera.webp';
        $alt = 'Porsche Panamera GTS';
        $content = '<b>Porsche Panamera GTS</b>, has 473 Horespower, 0-60 mph in 3.7s, and with a top speed of 186 mph';
        $color = "green"; 
        break;  
    case 'Tuesday':
        $day = 'Tuesday';
        $car = '<h2>Porsche Taycan Turbo S</h2>';
        $pic = 'taycan.webp';
        $alt = 'Porsche Taycan Turbo S';
        $content = '<b>Porsche Taycan Turbo S</b>, has 750 Horespower, 0-60 mph in 2.6s, and with a top speed of 162 mph';
        $color = "lightblue";
        break;
    case 'Wednesday':
        $day = 'Wednesday';
        $car = '<h2>Audi RS7 Sportback</h2>';
        $pic = 'rs7.jpeg';
        $alt = 'Audi RS7 Sportback';
        $content = '<b>Audi RS7 Sportback</b>, has 591 Horespower, 0-60 mph in 3.5s, and with a top speed of 190 mph';
        $color = "red";
        break;
    case 'Thursday':
        $day = 'Thursday';
        $car = '<h2>Maserati Ghibli Trofeo</h2>';
        $pic = 'ghibli.jpeg';
        $alt = 'Maserati Ghibli Trofeo';
        $content = '<b>Maserati Ghibli Trofeo</b>, has 580 Horespower, 0-60 mph in 4.0s, and with a top speed of 203 mph';
        $color = "aquamarine";
        break;
    case 'Friday':
        $day = 'Friday';
        $car = '<h2>BMW M8 Competition Gran Coupe</h2>';
        $pic = 'm8c.jpeg';
        $alt = 'BMW M8 Competition Gran Coupe';
        $content = '<b>BMW M8 Competition Gran Coupe</b>, has 617 Horespower, 0-60 mph in 3.0s, and with a top speed of 190 mph';
        $color = "mediumpurple";
        break;
    case 'Saturday':
        $day = 'Saturday';
        $car = '<h2>Mercedes Benz CLS 53 AMG</h2>';
        $pic = 'cls53.jpeg';
        $alt = 'Mercedes Benz CLS 53 AMG';
        $content = '<b>Mercedes Benz CLS 53 AMG</b>, has 457 Horespower, 0-60 mph in 4.5s, and with a top speed of 155 mph';
        $color = "lightpink";
        break;
    case 'Sunday':
        $day = 'Sunday';
        $car = '<h2>Porsche Macan GTS</h2>';
        $pic = 'macan.jpeg';
        $alt = 'Porsche Macan GTS';
        $content = '<b>Porsche Macan GTS</b>, has 434 Horespower, 0-60 mph in 4.1s, and with a top speed of 159 mph';
        $color = "slateblue";
        break;
}

// My navigation and my function

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// Below is my php for my form

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href="'.$key.'"> '.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href="'.$key.'"> '.$value.'</a></li>';
        }
    } // end foreach
    return $my_return;
} // end function