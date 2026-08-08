<!DOCTYPE html>
<html>
<head>
    <title>Admission Application System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Admission Application Form</h2>

<form action="process.php" method="POST">

<label>Applicant Name</label>
<input type="text" name="name" required>

<label>Date of Birth</label>
<input type="date" name="dob" required>

<label>Gender</label>
<select name="gender" required>
    <option value="">Select</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
</select>

<label>Email</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="tel" name="mobile" pattern="[0-9]{10}" required>

<label>Address</label>
<textarea name="address" rows="4" required></textarea>

<label>Course Applied</label>
<select name="course" required>
    <option value="">Select Course</option>
    <option>B.Sc Computer Science</option>
    <option>BCA</option>
    <option>B.Com</option>
    <option>BBA</option>
</select>

<input type="submit" value="Apply Now">

</form>

</div>

</body>
</html>