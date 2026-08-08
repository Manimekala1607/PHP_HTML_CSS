<!DOCTYPE html>
<html>
<head>
    <title>Course Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Course Registration Form</h2>

<form action="process.php" method="POST">

<label>Student Name</label>
<input type="text" name="name" required>

<label>Register Number</label>
<input type="text" name="regno" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="tel" name="mobile" pattern="[0-9]{10}" required>

<label>Select Course</label>
<select name="course" required>
<option value="">Choose Course</option>
<option>Web Designing and Development</option>
<option>Java Programming</option>
<option>Python Programming</option>
<option>Data Science</option>
<option>Artificial Intelligence</option>
</select>

<label>Mode of Learning</label>
<input type="radio" name="mode" value="Online" required> Online
<input type="radio" name="mode" value="Offline"> Offline

<br><br>

<input type="submit" value="Register">

</form>

</div>

</body>
</html>

