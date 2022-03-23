<?php 

// our index page which must show the session_start()

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

    <main>
        <h1><?= $headline ?></h1>
        <h2>World Top cities by GDP</h2>
        <p>Gross domestic product (GDP) is a monetary measure of the market value of all the final goods and services produced in a specific time period by countries. GDP (nominal) per capita does not, however, reflect differences in the cost of living and the inflation rates of the countries; therefore, using a basis of GDP per capita at purchasing power parity (PPP) may be more useful when comparing living standards between nations, while nominal GDP is more useful comparing national economies on the international market. Total GDP can also be broken down into the contribution of each industry or sector of the economy. The ratio of GDP to the total population of the region is the per capita GDP and the same is called Mean Standard of Living. </p>
        <p>Determining the richest city in the world can be tricky. This is because many different factors can be used to determine a city’s wealth. For example, the gross domestic product, or GDP, can be used as a measure of a city’s wealth. In its simplest term, the GDP of a region (such as country or city) is defined as the prices of goods and services produced within that area. </p>
        <p>Another way that the richest cities in the world can be measured is through the total wealth of its residents. A study by New World Wealth calculated the total wealth of citizens in cities around the world. According to New World Wealth, private wealth is a better indicator of the financial health of the economy than GDP, although this remains debatable. </p>
    </main>

    <aside>
        <h3>Picture of Cities!</h3>
        <?php echo random_city_images($city_photos); ?>
    </aside>

</div>

<?php
include('./includes/footer.php');
