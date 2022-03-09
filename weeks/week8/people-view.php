<?php

//people-view.php
include('config.php');

// if id has been set!!

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

// we have to select from the table and make sure that people_id = $id

$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
         or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
// before we copy and past our while loop, we cannot out anything here
    while ($row = mysqli_fetch_assoc($result)) {
        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $email = stripcslashes($row['email']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $details = stripcslashes($row['details']);
        $feedback = '';
    } // closing the while loop

} else { // closing if mysqli_num_rows
    $feedback = 'Houston, we have a problem!';
} // closing else


// we will place all of the pho here BEFORE we call out the header.php

include('./includes/header.php');

?>

<main>
    <h1>Welcome to our People View Page!</h1>
    <h2>Welcome to <?= $first_name ?>'s Page</h2>

    <ul>
        <?php
            echo '
                <li><b>First Name:</b> '.$first_name.'</li>
                <li><b>Last Name:</b> '.$last_name.'</li>
                <li><b>Birthdate:</b> '.$birthdate.'</li>
                <li><b>Email:</b> '.$email.'</li>
                <li><b>Occupation:</b> '.$occupation.'</li>
                <li>
                    <p> '.$details.' </p>
                </li>
            ';
        ?>
    </ul>

    <p><a href="people.php">Return to the people.php page!</a></p>
</main>

<aside>
    <h3>We will display the image of the politician that we see on this page!</h3>
    <figure>
        <img src="images/people<?= $id ?>.jpg" alt="<?= $first_name ?>">
        <figcaption><?php echo ''.$first_name.' '.$last_name.', '.$occupation.''; ?></figcaption>
    </figure>
</aside>

</div>
<!-- end wrapper -->

<?php 
    include('./includes/footer.php');