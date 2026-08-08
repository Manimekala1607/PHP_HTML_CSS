<!DOCTYPE html>
<html>
<head>
    <title>Employee Email ID Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Employee Email ID Generator</h2>

<form action="process.php" method="POST">

<label>First Name</label>
<input type="text" name="fname" required>

<label>Last Name</label>
<input type="text" name="lname" required>

<label>Department</label>
<select name="department" required>
<option value="">Select Department</option>
<option>HR</option>
<option>IT</option>
<option>Finance</option>
<option>Marketing</option>
<option>Sales</option>
</select>

<input type="submit" value="Generate Email">

</form>

</div>

</body>
</html>