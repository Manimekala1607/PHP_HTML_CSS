<!DOCTYPE html>
<html>
<head>
    <title>Sales Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Sales Calculator</h2>

    <form action="process.php" method="POST">

        <label>Product Name</label>
        <input type="text" name="product" required>

        <label>Quantity</label>
        <input type="number" name="quantity" min="1" required>

        <label>Price per Item (₹)</label>
        <input type="number" name="price" min="1" step="0.01" required>

        <label>Discount (%)</label>
        <input type="number" name="discount" min="0" max="100" value="0" required>

        <input type="submit" value="Calculate Sales">

    </form>

</div>

</body>
</html>