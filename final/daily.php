<?php 

// our daily page which must show the session_start()

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

<main id="<?php echo $day ;?>">
    <h1><?php echo $headline ;?></h1>
    <h2><?php echo ''.$day.'\'s city is '.$city.''; ?></h2>
    <p><?php echo $content; ?></p>
    <br>
    <h2>Check out Today's city!</h2>
    <ul>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
    </ul>
</main>

<aside>
    <h3>Here is a close look to this Amazing city!</h3>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>"> 
</aside>

</div> <!-- end wrapper -->
<?php
    include('includes/footer.php');
?>