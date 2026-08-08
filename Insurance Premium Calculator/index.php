<!DOCTYPE html>
<html>
<head>
    <title>Insurance Premium Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Insurance Premium Calculator</h2>

<form action="process.php" method="POST">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Age</label>
<input type="number" name="age" min="18" max="80" required>

<label>Insurance Amount (₹)</label>
<input type="number" name="amount" min="10000" required>

<input type="submit" value="Calculate Premium">

</form>

</div>

</body>
</html>