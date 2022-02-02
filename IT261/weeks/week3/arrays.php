<?php

$fruits = array(
    'bananas',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pineapples'
);

$fruits = [
    'bananas',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pineapples'
];

// index array
$fruits[0] = 'bananas';
$fruits[1] = 'strawberries';
$fruits[2] = 'blueberries';
$fruits[3] = 'oranges';
$fruits[4] = 'apples';
$fruits[5] = 'pineapples';

// We cannot echo an array

echo $fruits[2];
echo '<br>';

print_r($fruits);
echo '<br>';
var_dump($fruits); 
echo '<br>';

echo '<pre>';
var_dump($fruits); 
echo '</pre>';

$title = 'The Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$book = array(
    'title' => 'The Handmaid\'s Tale',
    'author' => 'Margaret Atwood',
    'character' => 'June',
    'actor' => 'Elizabeth Moss'
);

// associative array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// you can echo an associative array by using a foreach loop
foreach($nav as $key => $value) {
    echo '<a href="'.$key.'"> '.$value.'</a><br>';
}

?>

<nav>
    <ul>
        <?php 
            foreach($nav as $key => $value) {
                echo '<li style="list-style-type: none;">
                <a style="text-decoration: none; color: red;" 
                href="'.$key.'"> '.$value.'</a></li>';
            }
        ?>  
    <ul>
</nav>