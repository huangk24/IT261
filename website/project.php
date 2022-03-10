<?php
    include('config.php');
    include('./includes/header.php');
?>
<div id="wrapper">
<main>
    <h1>Welcome to my Car page</h1>
    <div id="car-wrapper">
    <?php
        $sql = 'SELECT * FROM car';
        // then we are going to connect to the database
        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
                 or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        // We are asking if the number of rows is greater than zero, then we will be able to see the table
        if (mysqli_num_rows($result) > 0) {
        // Think about our one row being an array - an associative array $row['first_name']
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <h3>'.$row['brand_name'].' '.$row['model'].'</h3>
                        <ul>
                            <li><b>Price:</b> $'.$row['price'].'</li>
                        </ul>
                        <p>For more information about '.$row['model'].' click <a href="view.php?id='.$row['car_id'].' ">here</a></p>
                ';
            }
        }

    ?>
    </div>
</main>
<aside>
    <h3>This is my aside that will be displaying random images!</h3>
    <?php echo random_car_images($car_photos); ?>
</aside>
</div>
<!-- end wrapper -->

<?php 
    include('./includes/footer.php');