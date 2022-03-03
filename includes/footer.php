<footer>
    <div class="inner">
        <ul>
            <li>Copyright <?= date('Y') ?></li>
            <li>All Rights Reserved</li>
            <li><a href="../../index.php">Web Design by Kai</a></li>
            <li><a href="">HTML VALID</a></li>
            <li><a href="">CSS VALID</a></li>
        </ul>
    </div>
</footer>
<?php
//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);
?>
</body>
</html>