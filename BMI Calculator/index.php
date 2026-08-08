<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>BMI Calculator</h2>

<form action="process.php" method="POST">

<label>Enter Your Name</label>
<input type="text" name="name" required>

<label>Height (in meters)</label>
<input type="number" name="height" step="0.01" required>

<label>Weight (in kilograms)</label>
<input type="number" name="weight" step="0.1" required>

<input type="submit" value="Calculate BMI">

</form>

</div>

</body>
</html>