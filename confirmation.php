<?php
    $correctVals = ["The Grasshopper", "Whiskey Maple Bacon", "Carrot Walnut", "Salted Caramel Cupcake", "Red Velvet", "Lemon Drop", "Tiramisu"];
    $isValid = true;
    if(isset($_POST['name']) AND !is_numeric($_POST['name'])) {
        if ($name === "") {
            echo "<p>You must provide a name for the order!</p>";
            $isValid = false;
        } else if (!isset($_POST['flavors'])) {
            echo "<p>You must select at least one option for the order!</p>";
            $isValid = false;
        }
        $order = $_POST['flavors'];
        foreach ($order as $option) {
            if(!in_array($option, $correctVals)) {
                echo "<p>Cupcakes options have been tampered!</p>";
                $isValid = false;
            }
        }
        echo "<a href='../cupcakes'>Go back to form</a>";
    }

    if($isValid) {
        $name = $_POST['name'];
        echo "<p>Thank you, $name, for your order!</p>";
        echo "<p>Order Summary:</p>";
        echo "<ul>";
        $order = $_POST['flavors'];
        foreach ($order as $option) {
            echo "<li>$option</li>";
        }
        echo "</ul>";
        printf("Order Total: $%1\$.2f", count($order) * 3.50);
    }
