<!DOCTYPE html>
<html>
<head>

    <title>Supermarket Billing System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>🛒 Supermarket Billing System</h2>

    <form action="process.php" method="POST">

        <label>Customer Name</label>
        <input type="text" name="customer" required>

        <label>Product Name</label>
        <input type="text" name="product" required>

        <label>Quantity</label>
        <input type="number" name="quantity" min="1" required>

        <label>Price per Item (₹)</label>
        <input type="number" name="price" min="1" step="0.01" required>

        <label>Discount (%)</label>
        <input type="number"
               name="discount"
               min="0"
               max="100"
               value="0"
               required>

        <label>GST (%)</label>
        <input type="number"
               name="gst"
               min="0"
               max="28"
               value="5"
               required>

        <input type="submit" value="Generate Bill">

    </form>

</div>

</body>
</html>