<?php
/*
*Author: Muhammad M Shahid
*Version:
*Description: Ice Cream shop
*/
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

$flavors = array("Vanilla","Chocolate","Strawberry","Blueberry");
$cones = array("sugar"=>"Sugar Cone","waffle"=>"Waffle Cone","cup");
include('header.php');

?>
<body>
<div class="container">
    <h1>Welcome to my Ice Cream Shoppe!</h1>
    <form action="process.php" method="post">

        <h3>Choose a flavor</h3>
        <?php
        foreach ($flavors as $flavor){
            echo "<label><input type='checkbox' name='flavor[]' value='$flavor'> $flavor</label><br>";
        }
        ?>

        <h3>Choose One</h3>
        <?php
        foreach ($cones as $value=>$label){
            echo " <label><input type='radio' name='cone' value='$value'> $label</label><br>";
        }
        ?>
        <h3>How many scoops?</h3>
        <input type="text" name="scoops" ><br>

        <br>
        <button type="submit">Place Order</button>
    </form>
</div>
</body>
</html>