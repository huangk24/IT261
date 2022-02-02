<?php
// class coffee exercise
// If today is Thursday, it will be pumpkin latte day
// We will start with the isset() function
// then we will introduce our first GLOBAL variable
// our switch

// $variable = 'Life is good!';
// if (isset($variable)) {
//     echo 'Yippy-skippy!!!';
// } else {
//     echo 'Not';
// }

// starting the switch
// If something is set, $today, then all is well
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch

switch($today) {
    case 'Thursday':
        $day = 'Thursday';
        $coffee = '<h2>Thursday is our Cap Day!</h2>';
        $pic = 'cap.jpeg';
        $alt = 'Cappacino';
        $content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in 
        Austria with later development taking place in Italy, and is prepared with 
        steamed milk foam. Variations of the drink involve the use of cream instead of 
        milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
        break;
    case 'Friday':
        $day = 'Friday';
        $coffee = '<h2>Friday is our Americano Day!</h2>';
        $pic = 'americano.jpeg';
        $alt = 'Americano';
        $content = '<b>Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso 
        with hot water, giving it a similar strength to, but different flavor from, traditionally 
        brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.';
        break;
    case 'Saturday':
        $day = 'Saturday';
        $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Coffee';
        $content = 'In New York, coffee snobbery is the norm with fancy (and admittedly delicious) java joints 
        like Blue Bottle, Gorilla Coffee, and Brooklyn Roasting. But the mark of an authentic coffee snob is 
        someone who demands a "regular coffee"—usually at a deli/corner store/bodega. <br>
        <i>A regular coffee is a coffee with cream (or milk) and two sugars.</i>';
        break;
    case 'Sunday':
        $day = 'Sunday';
        $coffee = '<h2>Sunday is our Green Tea Day!</h2>';
        $pic = 'green-tea.jpeg';
        $alt = 'Green Tea';
        $content = '<b>Green tea</b> is a type of tea that is made from Camellia sinensis leaves and buds that have 
        not undergone the same withering and oxidation process used to make oolong teas and black teas. Green 
        tea originated in China, and since then its production and manufacture has spread to other countries 
        in East and Southeast Asia.';
        break;
    case 'Monday':
        $day = 'Monday';
        $coffee = '<h2>Monday is our Frappacino Day!</h2>';
        $pic = 'frap.jpeg';
        $alt = 'Frappacino';
        $content = '<b>Frappuccino</b> is a line of blended iced coffee drinks sold by Starbucks. It consists 
        of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped 
        with whipped cream and or spices.';
        break;
    case 'Tuesday':
        $day = 'Tuesday';
        $coffee = '<h2>Saturday is our Latte Day!</h2>';
        $pic = 'latte.jpeg';
        $alt = 'Latte';
        $content = '<b>Caffè latte</b>, often shortened to just latte in English, is a coffee drink of Italian 
        origin made with espresso and steamed milk.';
        break;
    case 'Wednesday':
        $day = 'Wednesday';
        $coffee = '<h2>Sunday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpeg';
        $alt = 'Pumpkin Latte';
        $content = 'The <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice 
        flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The 
        beverage is most commonly associated with Starbucks, which first offered the drink in 2003, and the season 
        of fall.';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Classwork Exercise</title>
    <style>
        #wrapper {
            width: 940px;
            margin: 20px auto;
        }
        #Monday {
            background-color: lightgreen;
        }
        #Tuesday {
            background-color: lightblue;
        }
        #Wednesday {
            background-color: lavender;
        }
        #Thursday {
            background-color: aquamarine;
        }
        #Friday {
            background-color: lightseagreen;
        }
        #Saturday {
            background-color: lightpink;
        }
        #Sunday {
            background-color: darkturquoise;
        }
    </style>
</head>
<body id="<?php echo $day ;?>">
    <div id="wrapper">
        <h1>My wonderful Switch Classwork Exercise! </h1>
        <?php echo $coffee; ?>
        <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>"> 
        <p><?php echo $content; ?></p>
        <h2>Check out our Daily Specials</h2>
        <ul>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        </ul>
    </div> <!-- end of wrapper -->
</body>
</html>