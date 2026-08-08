<?php

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$course = $_POST['course'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Admission Acknowledgement</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Admission Acknowledgement</h2>

<p class="success">
Your admission application has been submitted successfully.
</p>

<table>

<tr>
<th>Applicant Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Date of Birth</th>
<td><?php echo $dob; ?></td>
</tr>

<tr>
<th>Gender</th>
<td><?php echo $gender; ?></td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $email; ?></td>
</tr>

<tr>
<th>Mobile</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Address</th>
<td><?php echo $address; ?></td>
</tr>

<tr>
<th>Course Applied</th>
<td><?php echo $course; ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Apply Again</button>
</a>

</div>

</body>
</html>