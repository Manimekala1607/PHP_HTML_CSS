<!DOCTYPE html>
<html>
<head>
    <title>Applicant Validation System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Applicant Validation Form</h2>

<form action="process.php" method="POST">

<label>Applicant Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="text" name="mobile" pattern="[0-9]{10}" required>

<label>Password</label>
<input type="password" name="password" minlength="8" required>

<input type="submit" value="Validate">

</form>

</div>

</body>
</html>