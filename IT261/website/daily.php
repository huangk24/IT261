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
        <h2><?php echo $day; ?>'s special car is <?php echo $car; ?></h2>
        <p><?php echo $content; ?></p>
        <br>
        <h2>Check out My Daily Special Cars!</h2>
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
        <h3>Here is a close look to this Amazing car!</h3>
        <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>"> 
    </aside>

    </div> <!-- end wrapper -->
    <?php
        include('includes/footer.php');
    ?>