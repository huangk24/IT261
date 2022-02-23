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
        $title = 'Thank you Page';
        $body = 'contact inner';
        $headline = 'Contact us today!';
        break;
    case 'thx.php':
        $title = 'Our Contact Page';
        $body = 'contact inner';
        $headline = 'Contact us today!';
        break;
    case 'gallery.php':
        $title = 'Our Gallery Page';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery!';
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

ob_start();
$first_name = '';
$last_name = '';
$email = '';
$drive = '';
$phone = '';
$cars = '';
$roads = '';
$privacy = '';
$comments = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$drive_err = '';
$phone_err = '';
$cars_err = '';
$roads_err = '';
$comments_err = '';
$privacy_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please enter your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please enter your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['drive'])) {
        $drive_err = 'Please choose your drive type';
    } else {
        $drive = $_POST['drive'];
    }

    if (empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)){
        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        } // end else
    } // end main if

    if (empty($_POST['cars'])) {
        $cars_err = 'What... no vehicle type...???';
    } else {
        $cars = $_POST['cars'];
    }

    if ($_POST['roads'] == NULL) {
        $roads_err = 'Please select your drive/road condition';
    } else {
        $roads = $_POST['roads'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = 'Your comments, please!';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'You cannot pass go!';
    } else {
        $privacy = $_POST['privacy'];
    }

    // our wines function!
    function my_cars($cars) {
        $my_return = '';
        if (!empty($_POST['cars'])) {
            $my_return = implode(', ', $_POST['cars']);
        } else {
            $cars_err = 'Please check your cars';
        }
        return $my_return;
    }

    if (isset($_POST['first_name'],
          $_POST['last_name'],
          $_POST['email'],
          $_POST['drive'],
          $_POST['phone'],
          $_POST['roads'],
          $_POST['cars'],
          $_POST['comments'],
          $_POST['privacy'])) {
    
        $to = 'huangkai990124@gmail.com';
        $subject = 'Test email '.date('m/d/y, h i A');
        $body = '
            First name : '.$first_name.'  '.PHP_EOL.'
            Last name : '.$last_name.'  '.PHP_EOL.'
            Email : '.$email.'  '.PHP_EOL.'
            Phone Number : '.$phone.'  '.PHP_EOL.'
            Vehicle Type : '.my_cars($cars).'  '.PHP_EOL.'            
            Drive : '.$drive.'  '.PHP_EOL.'
            Drive Condition : '.$roads.'  '.PHP_EOL.'
            Comments : '.$comments.'  '.PHP_EOL.'
        ';

        if (!empty($first_name && $last_name && $email && $drive &&
                   $cars && $roads && $comments && $phone && $privacy &&
                   preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))) {
            $headers = array(
                'From' => 'noreply@huangk24.com',
                'Reply to:' => ' '.$email.''
            );
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
        }
    }

}

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

// random image
$photos[0] = 'cls53';
$photos[1] = 'ghibli';
$photos[2] = 'm8c';
$photos[3] = 'macan';
$photos[4] = 'rs7';

function random_images($photos) {
    $my_return = '';
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpeg';
    $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
    return $my_return;
}