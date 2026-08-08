<!DOCTYPE html>
<html>
<head>
    <title>Parent Teacher Meeting Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Parent Teacher Meeting Registration</h2>

<form action="process.php" method="POST">

<label>Student Name</label>
<input type="text" name="student" required>

<label>Parent Name</label>
<input type="text" name="parent" required>

<label>Class</label>
<input type="text" name="class" required>

<label>Teacher Name</label>
<input type="text" name="teacher" required>

<label>Meeting Date</label>
<input type="date" name="date" required>

<label>Mobile Number</label>
<input type="tel" name="mobile" pattern="[0-9]{10}" required>

<input type="submit" value="Register">

</form>

</div>

</body>
</html>