<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Order Confirmation</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $flavor = $_POST["flavor"];
        $quantity = $_POST["quantity"];
        $totalPrice = $quantity * 2.50; // Replace with actual pricing logic

        echo "<p>You have ordered $quantity scoop(s) of $flavor ice cream.</p>";
        echo "<p>Total Price: $$totalPrice</p>";
    } else {
        echo "<p>Invalid request.</p>";
    }
    ?>
</body>
</html>

