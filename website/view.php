<?php

//people-view.php
include('config.php');

// if id has been set!!

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:project.php');
}

// we have to select from the table and make sure that people_id = $id

$sql = 'SELECT * FROM car WHERE car_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
         or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
// before we copy and past our while loop, we cannot out anything here
    while ($row = mysqli_fetch_assoc($result)) {
        $brand_name = stripcslashes($row['brand_name']);
        $model = stripcslashes($row['model']);
        $price = stripcslashes($row['price']);
        $length = stripcslashes($row['length']);
        $width = stripcslashes($row['width']);
        $height = stripcslashes($row['height']);
        $horsepower = stripcslashes($row['horsepower']);
        $time = stripcslashes($row['0_60_time']);
        $top_speed = stripcslashes($row['top_speed']);
        $feedback = '';
    } // closing the while loop

} else { // closing if mysqli_num_rows
    $feedback = 'Houston, we have a problem!';
} // closing else


// we will place all of the pho here BEFORE we call out the header.php

include('./includes/header.php');

?>

<div id="wrapper">
<main>
    <h1>Welcome to our Car View Page!</h1>
    <div id="car-wrapper">
        <h2>Welcome to <?= $brand_name.' '.$model ?>'s Page</h2>
        <ul>
            <?php
                echo '
                    <li><b>'.$brand_name.' '.$model.'</b></li>
                    <li><b>Price: $</b> '.$price.'</li>
                    <li><b>Car Length:</b> '.$length.' in</li>
                    <li><b>Car Width:</b> '.$width.' in</li>
                    <li><b>Car Height:</b> '.$height.' in</li>
                    <li><b>Horsepower:</b> '.$horsepower.' hp</li>
                    <li><b>0-60 mpg time:</b> '.$time.' s</li>
                    <li><b>Top Speed:</b> '.$top_speed.' mph</li>
                ';
            ?>
        </ul>
    <p><a href="project.php">Return to the car page!</a></p>
    </div>
</main>

<aside>
    <h3>We will display the image of the car that we see on this page!</h3>
    <figure>
        <img src="images/car<?= $id ?>.jpeg" alt="<?= $model ?>">
        <figcaption><?php echo ''.$brand_name.' '.$model.''; ?></figcaption>
    </figure>
</aside>

</div>
<!-- end wrapper -->

<?php 
    include('./includes/footer.php');