    <?php
        include('config.php');
        include('includes/header.php');
    ?>

    <style> 
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

    <div id="wrapper">

    <main id="<?php echo $day ;?>">
        <h1><?php echo $headline ;?></h1>
        <h2>Tell me your car preference!!</h2>

        <?php
            include('includes/form.php');
        ?>

    </main>

    <aside>
        <h3>Here is my aside</h3>
    </aside>

    </div> <!-- end wrapper -->
    <?php
        include('includes/footer.php');
    ?>