<!DOCTYPE html>
<html>
<head>
    <title>Employee Salary Processing System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Employee Salary Processing System</h2>

<form action="process.php" method="POST">

<label>Employee ID</label>
<input type="text" name="empid" required>

<label>Employee Name</label>
<input type="text" name="name" required>

<label>Basic Salary (₹)</label>
<input type="number" name="basic" min="0" required>

<input type="submit" value="Calculate Salary">

</form>

</div>

</body>
</html>