<!DOCTYPE html>
<html>
<head>
    <title>Ice Cream Shop</title>
</head>
<body>
    <h1>Welcome to the Ice Cream Shop</h1>
    <h2>Our Flavors:</h2>
    <?php
    // Replace this with actual flavor data from a database
    $flavors = array("Chocolate", "Vanilla", "Strawberry", "Mint Chocolate Chip");

    foreach ($flavors as $flavor) {
        echo "<p>$flavor</p>";
    }
    ?>

    <h2>Order Ice Cream:</h2>
    <form action="order.php" method="post">
        <label for="flavor">Select Flavor:</label>
        <select name="flavor" id="flavor">
            <?php
            // Populate the select box with flavors
            foreach ($flavors as $flavor) {
                echo "<option value='$flavor'>$flavor</option>";
            }
            ?>
        </select>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1">
        <br>
        <input type="submit" value="Order">
    </form>
</body>
</html>

