<?php
/**
 * Marcos Rivera
 * Date: 1/13/20
 * http://marcosrivera.greenriverdev.com/328/cupcakes/index.php
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
<form action=* method="post">
    <h1><strong>Cupcake Fundraiser</strong></h1>
    <div>
        <legend>Your name: </legend>
        <input type="text">
    </div>

    <div>
        <legend>Cupcake Flavors: </legend>
    </div>

    <?php
        $flavors = ["The Grasshopper" => "grasshopper",
                    "Whiskey Maple Bacon" => "maple",
                    "Carrot Walnut" => "carrot",
                    "Salted Caramel Cupcake" => "caramel",
                    "Red Velvet" => "velvet",
                    "Lemon Drop" => "lemon",
                    "Tiramisu" => "tiramisu"];
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
