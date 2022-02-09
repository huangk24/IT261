<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Currency Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My Currency converter form!</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

        <label>Amount</label>
        <input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']) ;?>">

        <!--
            canadian = .80;
            rubles = 0.013;
            pounds = 1.37;
            euros = 1.14;
            yen = 0.0087;
        -->
        <!-- the logic behind the stickness in our radio button is if post currency is set and if post currency = value
        echo checked = checked -->
        <label>Currency</label> 
        <ul>
            <li>
                <input type="radio" name="currency" value="0.013" 
                    <?php 
                        if (isset($_POST['currency']) && $_POST['currency'] == 0.013)
                        echo 'checked = "checked" ';
                    ?>>Rubles
            </li>
            <li>
                <input type="radio" name="currency" value="0.8" 
                    <?php 
                        if (isset($_POST['currency']) && $_POST['currency'] == 0.8)
                        echo 'checked = "checked" ';
                    ?>>Canadian
            </li>
            <li>
                <input type="radio" name="currency" value="1.37" 
                    <?php 
                        if (isset($_POST['currency']) && $_POST['currency'] == 1.37)
                        echo 'checked = "checked" ';
                    ?>>Pounds
            </li>
            <li>
                <input type="radio" name="currency" value="1.14" 
                    <?php 
                        if (isset($_POST['currency']) && $_POST['currency'] == 1.14)
                        echo 'checked = "checked" ';
                    ?>>Euros
            </li>
            <li>
                <input type="radio" name="currency" value="0.0087" 
                    <?php 
                        if (isset($_POST['currency']) && $_POST['currency'] == 0.0087)
                        echo 'checked = "checked" ';
                    ?>>Yen
            </li>
        </ul>

        <!-- checkbox works the same way as a radio button -->
        <!-- you cannot select "select one" -->
        <select name="bank">
            <option value="" NULL 
                <?php 
                    if (isset($_POST['bank']) && $_POST['bank'] == NULL)
                    echo 'selected = "unselected" ';
                ?>>Select one</option>
            <option value="boa" 
                <?php 
                    if (isset($_POST['bank']) && $_POST['bank'] == 'boa')
                    echo 'selected = "selected" ';
                ?>>Bank of America</option>
            <option value="chase" 
                <?php 
                    if (isset($_POST['bank']) && $_POST['bank'] == 'chase')
                    echo 'selected = "selected" ';
                ?>>Chase Bank</option>
            <option value="wells" 
                <?php 
                    if (isset($_POST['bank']) && $_POST['bank'] == 'wells')
                    echo 'selected = "selected" ';
                ?>>Wells Fargo</option>
            <option value="becu" 
                <?php 
                    if (isset($_POST['bank']) && $_POST['bank'] == 'becu')
                    echo 'selected = "selected" ';
                ?>>BECU</option>

        <input type="submit" value="Convert it!">
    </form>
    <button><a href="">Reset</a></button>
    <?php
    // If name is not filled out, give me a message
    // If each of the input fields are not filled out, give me a specific message
    // name, email, amount, currency, bank
    // $SERVER['REQUEST_METHOD']

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            echo 'Please fill out your name!';
        }
        if (empty($_POST['email'])) {
            echo 'Please fill out your email!';
        }
        if (empty($_POST['amount'])) {
            echo 'Please fill out your amount! A "Zero" value will not work!';
        }
        if (empty($_POST['currency'])) {
            echo 'Please choose you currency!';
        }
        if ($_POST['bank'] == NULL) {
            echo 'Please choose your banking instituition';
        }

        if (isset($_POST['name'],
              $_POST['email'],
              $_POST['amount'],
              $_POST['currency'],
              $_POST['bank'])) {
            $name     = $_POST['name'];
            $email    = $_POST['email'];
            $amount   = $_POST['amount'];
            $currency = $_POST['currency'];
            $bank     = $_POST['bank'];

            $total = $amount * $currency;

            if (!empty($name && $email && $amount && $currency && $bank)) {
                echo '
                    <div class="box">
                    <h2>Hello, <b>'.$name.'</b></h2>
                    <p>We have confirmed your email as 
                    <b>'.$email.'</b>, and we will be sending you
                    the following information!</p>
                    <p>You have deposited '.$amount.' in foreign 
                    currency</p>
                    <p>And, this will equal tp $'.$total.' in 
                    American Dollars</p>
                    <p>And, you will receive a statement from 
                    '.$bank.' reflecting this deposit.</p>
                    </div>
                ';
            }
        }
    } // close server


    ?>
</body>
</html>