<?php
/**
 * Marcos Rivera
 * Date: 1/13/20
 * http://marcosrivera.greenriverdev.com/328/cupcakes/index.php
 *
 * The following program utilizes the associative array to display available options for cupcake flavors,
 * A name for the order, as well as the grand total when a correct order has been made!
 *
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Cupcakes Assignment</title>
</head>
<body>
<form action="confirmation.php" method="post">
    <h1><strong>Cupcake Fundraiser</strong></h1>
    <div>
        <legend>Your name: </legend>
        <input type="text" name="name">
    </div>
    <div>
        <legend>Cupcake Flavors: </legend>
    </div>
    <!-- The following block constructs available cupcake flavors-->
    <?php
        $flavors = ["grasshopper" => "The Grasshopper",
                    "maple" => "Whiskey Maple Bacon",
                    "carrot" => "Carrot Walnut",
                    "caramel" => "Salted Caramel Cupcake",
                    "velvet" => "Red Velvet",
                    "lemon" => "Lemon Drop",
                    "tiramisu" => "Tiramisu"];
        foreach ($flavors as $key => $value) {
            echo "<div>
                  <input type='checkbox' value='$value' id='$key' name='flavors[]'>
                  <label for='$key'>$key</label>
                  </div>";
        }
    ?>
    <button id="submit" type="submit">
        Order Up
    </button>
</form>
</body>
</html>
