<!DOCTYPE html>
<html>
<head>
    <title>Library Membership Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Library Membership Registration</h2>

<form action="process.php" method="POST">

<label>Member Name</label>
<input type="text" name="name" required>

<label>Register Number</label>
<input type="text" name="regno" required>

<label>Email Address</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="tel" name="mobile" pattern="[0-9]{10}" required>

<label>Membership Type</label>
<select name="membership" required>
<option value="">Select Membership</option>
<option>Student</option>
<option>Faculty</option>
<option>Research Scholar</option>
</select>

<label>Department</label>
<input type="text" name="department" required>

<input type="submit" value="Register Membership">

</form>

</div>

</body>
</html>