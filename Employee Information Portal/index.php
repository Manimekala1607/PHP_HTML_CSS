<!DOCTYPE html>
<html>
<head>
    <title>Employee Information Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Employee Information Portal</h2>

<form action="process.php" method="POST">

<label>Employee ID</label>
<input type="text" name="empid" required>

<label>Employee Name</label>
<input type="text" name="name" required>

<label>Department</label>
<select name="department" required>
<option value="">Select Department</option>
<option>Human Resources</option>
<option>Information Technology</option>
<option>Finance</option>
<option>Marketing</option>
<option>Sales</option>
</select>

<label>Designation</label>
<input type="text" name="designation" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="tel" name="mobile" pattern="[0-9]{10}" required>

<label>Address</label>
<textarea name="address" rows="4" required></textarea>

<input type="submit" value="Save Employee">

</form>

</div>

</body>
</html>