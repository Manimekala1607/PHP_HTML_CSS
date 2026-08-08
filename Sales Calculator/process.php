<?php

$product = $_POST['product'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$discount = $_POST['discount'];

$subtotal = $quantity * $price;

$discountAmount = ($subtotal * $discount) / 100;

$finalAmount = $subtotal - $discountAmount;

?>

<!DOCTYPE html>
<html>
<head>

    <title>Sales Calculation Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>Sales Calculation Result</h2>

    <p class="success">
        Sales Amount Calculated Successfully!
    </p>

    <table>

        <tr>
            <th>Product Name</th>
            <td><?php echo htmlspecialchars($product); ?></td>
        </tr>

        <tr>
            <th>Quantity</th>
            <td><?php echo $quantity; ?></td>
        </tr>

        <tr>
            <th>Price per Item</th>
            <td>₹ <?php echo number_format($price, 2); ?></td>
        </tr>

        <tr>
            <th>Subtotal</th>
            <td>₹ <?php echo number_format($subtotal, 2); ?></td>
        </tr>

        <tr>
            <th>Discount</th>
            <td><?php echo $discount; ?>%</td>
        </tr>

        <tr>
            <th>Discount Amount</th>
            <td>₹ <?php echo number_format($discountAmount, 2); ?></td>
        </tr>

        <tr class="total">
            <th>Final Sales Amount</th>
            <td>
                <b>₹ <?php echo number_format($finalAmount, 2); ?></b>
            </td>
        </tr>

    </table>

    <br>

    <a href="index.php">
        <button>Calculate Again</button>
    </a>

</div>

</body>
</html>