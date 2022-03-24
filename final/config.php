<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$success = 'You have successfully logged on!!';
$errors = array();

// my php for my daily pages
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Monday':
        $day = 'Monday';
        $city = '<h2>Tokyo</h2>';
        $pic = 'city1.jpeg';
        $alt = 'tokyo';
        $content = '<b>Tokyo</b>, historically Tokio and officially the Tokyo Metropolis (東京都, Tōkyō-to), is the capital and largest city of Japan. Its metropolitan area is the most populous in the world, with an estimated 37.468 million residents in 2018. Located at the head of Tokyo Bay, the prefecture forms part of the Kantō region on the central Pacific coast of Japan\'s main island of Honshu. Tokyo is the political and economic center of the country, as well as the seat of the Emperor of Japan and the national government. As of 2021, the prefecture has an estimated population of 14.04 million.';
        $color = "green"; 
        break;  
    case 'Tuesday':
        $day = 'Tuesday';
        $city = '<h2>New York</h2>';
        $pic = 'city2.jpeg';
        $alt = 'new york';
        $content = '<b>New York</b>, often called New York City (NYC) to distinguish it from the state of New York, is the most populous city in the United States. With a 2020 population of 8,804,190 distributed over 300.46 square miles (778.2 km²), New York City is also the most densely populated major city in the United States. Located at the southern tip of the state of New York, the city is the center of the New York metropolitan area, the largest metropolitan area in the world by urban area. With over 20.1 million people in its metropolitan statistical area and 23.5 million in its combined statistical area as of 2020, New York is one of the world\'s most populous megacities. New York City has been described as the cultural, financial, and media capital of the world, significantly influencing commerce, entertainment, research, technology, education, politics, tourism, dining, art, fashion, and sports, and is the most photographed city in the world. Home to the headquarters of the United Nations, New York is an important center for international diplomacy, and has sometimes been called the capital of the world.';
        $color = "lightblue";
        break;
    case 'Wednesday':
        $day = 'Wednesday';
        $city = '<h2>Los Angeles</h2>';
        $pic = 'city3.jpeg';
        $alt = 'los angeles';
        $content = '<b>Los Angeles</b>, often referred to by its initials L.A., is the largest city in California. With a 2020 population of 3,898,747, it is the second-largest city in the United States, following New York City. Los Angeles is known for its Mediterranean climate, ethnic and cultural diversity, Hollywood film industry and sprawling metropolitan area.';
        $color = "red";
        break;
    case 'Thursday':
        $day = 'Thursday';
        $city = '<h2>Seoul</h2>';
        $pic = 'city4.jpeg';
        $alt = 'seoul';
        $content = '<b>Seoul</b>, officially the Seoul Special City, is the capital and largest metropolis of South Korea. Seoul has a population of 9.7 million people, and forms the heart of the Seoul Capital Area with the surrounding Incheon metropolis and Gyeonggi province. Considered to be a global city and rated as an Alpha - City by Globalization and World Cities Research Network (GaWC), Seoul was the world\'s 4th largest metropolitan economy in 2014 after Tokyo, New York City and Los Angeles. International visitors generally reach Seoul via AREX from Incheon International Airport, notable for having been rated the best airport for nine consecutive years (2005 - 2013) by Airports Council International. In 2015, it was rated Asia\'s most livable city with the second highest quality of life globally by Arcadis, with the GDP per capita (PPP) in Seoul being around $40,000. In 2017, the cost of living in Seoul was ranked the 6th highest globally. In 2020, Seoul\'s real estate market was ranked 3rd in the world for the price of apartments in the downtown center';
        $color = "aquamarine";
        break;
    case 'Friday':
        $day = 'Friday';
        $city = '<h2>London</h2>';
        $pic = 'city5.jpeg';
        $alt = 'london';
        $content = '<b>London</b> is the capital and largest city of England and the United Kingdom. It stands on the River Thames in south-east England at the head of a 50-mile (80 km) estuary down to the North Sea, and has been a major settlement for two millennia. The City of London, its ancient core and financial centre, was founded by the Romans as Londinium and retains boundaries close to its medieval ones. Since the 19th century, "London" has also referred to the metropolis around this core, historically split between the counties of Middlesex, Essex, Surrey, Kent, and Hertfordshire, which largely comprises Greater London, governed by the Greater London Authority. The City of Westminster, to the west of the City of London, has for centuries held the national government and parliament.';
        $color = "mediumpurple";
        break;
    case 'Saturday':
        $day = 'Saturday';
        $city = '<h2>Paris</h2>';
        $pic = 'city6.jpeg';
        $alt = 'paris';
        $content = '<b>Paris</b> is the capital and most populous city of France, with an estimated population of 2,165,423 residents in 2019 in an area of more than 105 square kilometres (41 square miles), making it the 34th most densely populated city in the world in 2020. Since the 17th century, Paris has been one of the world\'s major centres of finance, diplomacy, commerce, fashion, gastronomy, science, and arts. The City of Paris is the centre and seat of government of the region and province of Île-de-France, or Paris Region, with an estimated population of 12,997,058 in 2020, or about 18 percent of the population of France, making it in 2020 the largest metropolitan area in Europe, and 14th largest in the world in 2015. The Paris Region had a GDP of €709 billion ($808 billion) in 2017. According to the Economist Intelligence Unit Worldwide Cost of Living Survey in 2018, Paris was the second most expensive city in the world, after Singapore and ahead of Zürich, Hong Kong, Oslo, and Geneva. Another source ranked Paris as most expensive, on par with Singapore and Hong Kong, in 2018.';
        $color = "lightpink";
        break;
    case 'Sunday':
        $day = 'Sunday';
        $city = '<h2>Shanghai</h2>';
        $pic = 'city7.jpeg';
        $alt = 'shanghai';
        $content = '<b>Shanghai</b>, is one of the four direct-administered municipalities of the People\'s Republic of China. The city is located on the southern estuary of the Yangtze River, with the Huangpu River flowing through it. With a population of 24.87 million as of 2020, Shanghai is the most populous urban area in China and the most populous city proper in the world. It is the only city in East Asia with a GDP greater than its corresponding capital. As of 2018, the Greater Shanghai metropolitan area, which includes Suzhou, Wuxi, Nantong, Ningbo, Jiaxing, Zhoushan, and Huzhou, was estimated to produce a gross metropolitan product (nominal) of nearly 9.1 trillion RMB ($1.33 trillion). Shanghai has been one of the world\'s major centers for finance, business and economics, research, education, science and technology, manufacturing, tourism, culture, dining, art, fashion, sports, and transportation, and the Port of Shanghai is the world\'s busiest container port. As of 2019, the Shanghai Pudong International Airport was one of the world\'s top 10th-busiest airport by passenger traffics, and one of the two international airports serving the Shanghai metropolitan area, the other one being the Shanghai Hongqiao International Airport.';
        $color = "slateblue";
        break;
} // end switch

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// switch for my title, body class and possibly headline

// There are our pages
// Home, About, Daily, Project, Contact, Register, Login page

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
    case 'thx.php':
        $title = 'Thank you Page';
        $body = 'contact inner';
        $headline = 'Contact us today!';
        break;
    case 'about.php':
        $title = 'About our Screenshots';
        $body = 'about inner';
        $headline = 'About our wonderful screenshots';
        break;
    case 'register.php':
        $title = 'Register Today!';
        $body = 'register inner';
        $headline = 'Register today!';
        break;
    case 'login.php':
        $title = 'Login Today!';
        $body = 'login inner';
        $headline = 'Login Page';
        break;
    case 'project.php':
        $title = 'Projects';
        $body = 'project inner';
        $headline = 'Top 10 Richest Cities in the World By GDP';
        break;
} // closing switch for my titles, body class, etc

// My navigation and my function

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';

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


function myError($myFile, $myLine, $errorMsg) {
    if (defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    } else {
        echo ' Houston, we have a problem!';
        die();
    }
}

// random image
$city_photos[0] = 'city1';
$city_photos[1] = 'city2';
$city_photos[2] = 'city3';
$city_photos[3] = 'city4';
$city_photos[4] = 'city5';
$city_photos[5] = 'city6';
$city_photos[6] = 'city7';
$city_photos[7] = 'city8';
$city_photos[8] = 'city9';
$city_photos[9] = 'city10';


function random_city_images($photos) {
    $my_return = '';
    $i = rand(0, 9);
    $selected_image = ''.$photos[$i].'.jpeg';
    $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
    return $my_return;
}


// Below is my php for my form

$first_name = '';
$last_name = '';
$email = '';
$region = '';
$phone = '';
$languages = '';
$ages = '';
$privacy = '';
$comments = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$region_err = '';
$phone_err = '';
$languages_err = '';
$ages_err = '';
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

    if (empty($_POST['region'])) {
        $region_err = 'Please choose your region';
    } else {
        $region = $_POST['region'];
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

    if (empty($_POST['languages'])) {
        $languages_err = 'Please tell me what language(s) do you speak';
    } else {
        $languages = $_POST['languages'];
    }

    if ($_POST['ages'] == NULL) {
        $ages_err = 'Please tell me your age range';
    } else {
        $ages = $_POST['ages'];
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

    // our languages function!
    function my_languages($languages) {
        $my_return = '';
        if (!empty($_POST['languages'])) {
            $my_return = implode(', ', $_POST['languages']);
        } else {
            $languages_err = 'Please check your languages';
        }
        return $my_return;
    }

    if (isset($_POST['first_name'],
          $_POST['last_name'],
          $_POST['email'],
          $_POST['region'],
          $_POST['phone'],
          $_POST['ages'],
          $_POST['languages'],
          $_POST['comments'],
          $_POST['privacy'])) {
    
        // $to = 'szemeo@mystudentswa.com';
        $to = 'huangkai990124@gmail.com';
        $subject = 'Test email '.date('m/d/y, h i A');
        $body = '
            First name : '.$first_name.'  '.PHP_EOL.'
            Last name : '.$last_name.'  '.PHP_EOL.'
            Email : '.$email.'  '.PHP_EOL.'
            Phone Number : '.$phone.'  '.PHP_EOL.'
            Age Range : '.$ages.'  '.PHP_EOL.'
            Region : '.$region.'  '.PHP_EOL.'
            Language(s) : '.my_languages($languages).'  '.PHP_EOL.'            
            Comments : '.$comments.'  '.PHP_EOL.'
        ';

        if (!empty($first_name && $last_name && $email && $region &&
                   $languages && $ages && $comments && $phone && $privacy &&
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
?>