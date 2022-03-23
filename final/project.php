<?php 

// our project page which must show the session_start()

session_start();

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
    <h1><?= $headline ?></h1>
    <div id="city-wrapper">
    <?php
        $sql = 'SELECT * FROM city';
        // then we are going to connect to the database
        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
                 or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        // We are asking if the number of rows is greater than zero, then we will be able to see the table
        if (mysqli_num_rows($result) > 0) {
        // Think about our one row being an array - an associative array $row['first_name']
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <h3>No. '.$row['city_id'].': '.$row['city_name'].'</h3>
                        <p>For more information about '.$row['city_name'].' click <a href="view.php?id='.$row['city_id'].' ">here</a></p>
                ';
            }
        }

    ?>
    </div>
</main>
<aside>
    <h3>This will be displaying random city!</h3>
    <?php echo random_city_images($city_photos); ?>
</aside>
</div>
<!-- end wrapper -->

<?php 
    include('./includes/footer.php');