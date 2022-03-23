<?php

// our project page which must show the session_start()

session_start();

//people-view.php
include('config.php');

// did the user log in correctly, and if not, the user will receive a message and 
// will be directed back to the log in page

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
    }

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

// if id has been set!!

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:project.php');
}

// we have to select from the table and make sure that people_id = $id

$sql = 'SELECT * FROM city WHERE city_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
         or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
// before we copy and past our while loop, we cannot out anything here
    while ($row = mysqli_fetch_assoc($result)) {
        $city_id = stripcslashes($row['city_id']);
        $city_name = stripcslashes($row['city_name']);
        $sub_region = stripcslashes($row['sub_region']);
        $country = stripcslashes($row['country']);
        $population = stripcslashes($row['population']);
        $area_mi = stripcslashes($row['area_mi']);
        $area_km = stripcslashes($row['area_km']);
        $gdp = stripcslashes($row['gdp']);
        $content = stripcslashes($row['content']);
        $feedback = '';
    } // closing the while loop

} else { // closing if mysqli_num_rows
    $feedback = 'Houston, we have a problem!';
} // closing else


// we will place all of the php here BEFORE we call out the header.php

include('./includes/header.php');

?>

<header>

<?php
if (isset($_SESSION['success']))   :?>
<div class="success">
    <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']); ?>
    </h3>
</div>
<!-- close success div -->

<?php endif; ?>

<?php // is our wonderful session username set?

if (isset($_SESSION['username'])) :?>
<div class="welcome-logout">
    <h3> Welcome,
        <?= $_SESSION['username'] ?>
    </h3>
    <p><a href="index.php?logout='1'">Logout</a></p>
</div>
<!-- close welcome logout -->
<?php endif; ?>

</header>

<div id="wrapper">
<main>
    <h1>Welcome to the City View Page!</h1>
    <div id="city-wrapper">
        <h2>Welcome to <?= $city_name ?>'s Page</h2>
        <ul>
            <?php
                echo '
                    <li><b>'.$city_name.' Ranked Number '.$city_id.' on GDP in 2022</b></li>
                    <li><b>Sub-region: </b> '.$sub_region.'</li>
                    <li><b>Country: </b> '.$country.'</li>
                    <li><b>Population:</b> '.$population.' </li>
                    <li><b>Area:</b> '.$area_mi.' sq mi ('.$area_km.' km²)</li>
                    <li><b>GDP:</b> '.$gdp.' billion US Dollar</li>
                    <p>'.$content.'</p>
                ';
            ?>
        </ul>
    <p><a href="project.php">Return to the city page!</a></p>
    </div>
</main>

<aside>
    <h3>The image of the city that we see on this page!</h3>
    <figure>
        <img src="images/city<?= $id ?>.jpeg" alt="<?= $city_name ?>">
        <figcaption><?php echo ''.$city_name.', '.$country.''; ?></figcaption>
    </figure>
</aside>

</div>
<!-- end wrapper -->

<?php 
    include('./includes/footer.php');