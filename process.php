<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('PRICE_PER_SCOOP', 2.00);
define('SALES_TAX', 0.10);
$title = "order Summary";
include('header.php');
?>

<body>
<div class="container">
    <h1>Thank You for Your Order!</h1>
    <?php
//    echo "<pre>" ;
//    var_dump($_POST);
//    echo "</pre>" ;
//get DAta from post array
    $numScoops = $_POST['scoops'];
    $cone = $_POST['cone'];
    $flavors = $_POST['flavor'];
    $flavorlist = implode(', ', $flavors);
    //flavors does not exceed scoops
    if (sizeof($flavors) > $numScoops) {
        echo "<h2>Oops! you have more flavors than scoops</h2>";
    }

//calculate price
    $subtotal = $numScoops * PRICE_PER_SCOOP;
    $total = $subtotal * ($subtotal * SALES_TAX);

// Display Summary
    echo "<p>Number of Scoops: $numScoops</p>";
    echo "<p>cone selection:  $cone</p>";
    echo "<p>Flavors: $flavorlist</p>";
    echo "<p>Subtotal: $" . number-format($subtotal,  2) . "</p>";
    echo "<p>Total: $" . number-format($total,  2) . "</p>";
    ?>

</div>
</body>
