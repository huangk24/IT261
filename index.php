<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
    <h1>Kai's Portal Page</h1>
    <nav>
        <ul>
            <li><a href="website/daily.php">Switch</a></li>
            <li><a href="adder.php">Troubleshoot</a></li>
            <li><a href="calculator3.php">Calculator</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Database</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </nav>

    <main>
        <h2>Welcome to my portal page</h2>
        <!-- In the main container, after a paragraph about yourselves, you will
        display your MAMP screenshots -->
        <p>Hi, my name is Kai Huang. I was born in Guangzhou, China. I came to the U.S. when I was 9th grade 
            and I have been studying in the U.S. since then! My favorite sport is basketball and my favorite team is LA Lakers!
            I have been cooking for myself after moving to Seattle, and my cooking skill has grown a lot especially after the pandemic
            has started!
        </p>
        <img src="./images/kai.jpg" alt="kai">
        <img src="./images/MAMP.png" alt="mamp">
        <img src="./images/error.png" alt="error">
    </main>

    <aside>
        <h3>Weekly Assignments</h3>
        <h4>Week 2</h4>
        <ul>
            <li><a href="weeks/week2/var.php">var.php</a>
            <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a>
            <li><a href="weeks/week2/currency.php">currency.php</a>
            <li><a href="weeks/week2/heredoc.php">heredoc.php</a>
        </ul>
        <h4>Week 3</h4>
        <ul>
            <li><a href="weeks/week3/arrays.php">arrays.php</a>
            <li><a href="weeks/week3/date.php">date.php</a>
            <li><a href="weeks/week3/for-loop.php">for-loop.php</a>
            <li><a href="weeks/week3/if-else.php">if-else.php</a>
            <li><a href="weeks/week3/index.php">index.php</a>
            <li><a href="weeks/week3/switch.php">switch.php</a>
        </ul>
        <h4>Week 4</h4>
        <ul>
            <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a>
            <li><a href="weeks/week4/celcius.php">ceicius.php</a>
            <li><a href="weeks/week4/form-get.php">form-get.php</a>
            <li><a href="weeks/week4/form1.php">form1.php</a>
            <li><a href="weeks/week4/form2.php">form2.php</a>
            <li><a href="weeks/week4/form3.php">form3.php</a>
        </ul>
        <h4>Week 5</h4>
        <ul>
            <li><a href="weeks/week5/currency.php">currency.php</a>
            <li><a href="weeks/week5/currency2.php">currency2.php</a>
            <li><a href="weeks/week5/null.php">null.php</a>
        </ul>
    </aside>

    <footer>
        <div id="inner-footer">
            <ul>
                <li>Copyright &copy;</li>
                <li>All Rights Reserved</li>
                <li><a href="website/index.php">Web Design By Kai</a></li>
                <li><a id="html-checker" href="#">HTML Validation</a></li>
                <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>
        </div> <!-- end inner footer-->
    </footer>
    <script>
        document.getElementById("html-checker").setAttribute
        ("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute
        ("href","https://jigsaw.w3.org/css-validator/validator?url=" + 
        location.href);
    </script>

    </div> <!-- end of wrapper -->
</body>
</html>