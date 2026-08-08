<?php

$customer = $_POST['customer'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$gst = $_POST['gst'];

$subtotal = $quantity * $price;

$discountAmount = ($subtotal * $discount) / 100;

$amountAfterDiscount = $subtotal - $discountAmount;

$gstAmount = ($amountAfterDiscount * $gst) / 100;

$finalAmount = $amountAfterDiscount + $gstAmount;

?>

<!DOCTYPE html>
<html>

<head>

    <title>Supermarket Bill</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>🧾 Supermarket Bill</h2>

    <p class="success">
        Bill Generated Successfully!
    </p>

    <table>

        <tr>
            <th>Customer Name</th>
            <td>
                <?php echo htmlspecialchars($customer); ?>
            </td>
        </tr>

        <tr>
            <th>Product Name</th>
            <td>
                <?php echo htmlspecialchars($product); ?>
            </td>
        </tr>

        <tr>
            <th>Quantity</th>
            <td>
                <?php echo $quantity; ?>
            </td>
        </tr>

        <tr>
            <th>Price per Item</th>
            <td>
                ₹ <?php echo number_format($price, 2); ?>
            </td>
        </tr>

        <tr>
            <th>Subtotal</th>
            <td>
                ₹ <?php echo number_format($subtotal, 2); ?>
            </td>
        </tr>

        <tr>
            <th>Discount</th>
            <td>
                <?php echo $discount; ?>%
            </td>
        </tr>

        <tr>
            <th>Discount Amount</th>
            <td>
                ₹ <?php echo number_format($discountAmount, 2); ?>
            </td>
        </tr>

        <tr>
            <th>GST</th>
            <td>
                <?php echo $gst; ?>%
            </td>
        </tr>

        <tr>
            <th>GST Amount</th>
            <td>
                ₹ <?php echo number_format($gstAmount, 2); ?>
            </td>
        </tr>

        <tr class="total">

            <th>Final Bill Amount</th>

            <td>
                <b>
                    ₹ <?php echo number_format($finalAmount, 2); ?>
                </b>
            </td>

        </tr>

    </table>

    <br>

    <a href="index.php">
        <button>Generate New Bill</button>
    </a>

</div>

</body>
</html>