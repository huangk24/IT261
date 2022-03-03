    <?php
        include('config.php');
        include('includes/header.php');
    ?>


    <div id="wrapper">

    <main id="gallery-main">
        <table>
            <?php foreach($car_gallery as $name => $image) : ?>
            <tr>
                <td><img src="images/<?php echo substr($image, 0, 5); ?>.jpeg"
                    alt="<?php echo $name; ?>"></td> <!-- image -->
                <td><?php echo $name; ?></td>  <!-- name -->
                <td><?php echo substr($image, 6); ?></td>   <!-- info -->
                <td><img src="images/<?php echo substr($image, 0, 6); ?>.jpeg"
                    alt="<?php echo $name; ?>"></td> <!-- image -->
            </tr>
            <?php endforeach;  ?>
        </table>
    </main>

    </div> <!-- end wrapper -->
    <?php
        include('includes/footer.php');
    ?>