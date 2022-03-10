<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body ;?>">
<header>
        <div id="inner-header">
            <a href="index.php"><img id="logo" src="images/logo.png" alt="logo"></a>
            <!-- <nav>
                <ul>
                    <li><a herf="index.php">Home</a></li>
                    <li><a herf="about.php">About</a></li>
                    <li><a herf="daily.php">Daily</a></li>
                    <li><a herf="project.php">Project</a></li>
                    <li><a herf="contact.php">Contact</a></li>
                    <li><a herf="gallerr.php">Gallery</a></li>
                </ul>
            </nav> -->
            <nav>
                <ul>
                    <?php 
                        echo make_links($nav);
                    ?>  
                </ul>
            </nav>
        </div> <!-- end inner header -->
</header>