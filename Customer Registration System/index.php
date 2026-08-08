<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Customer Registration Form</h2>

<form action="process.php" method="POST">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Email ID</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="tel" name="mobile" pattern="[0-9]{10}" required>

<label>Gender</label>
<select name="gender" required>
<option value="">Select</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>

<label>City</label>
<input type="text" name="city" required>

<label>Address</label>
<textarea name="address" rows="4" required></textarea>

<input type="submit" value="Register">

</form>

</div>

</body>
</html>