<?php

$name=$_POST['name'];
$regno=$_POST['regno'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$course=$_POST['course'];
$mode=$_POST['mode'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Confirmation</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Course Registration Successful</h2>

<p class="success">
Your registration has been completed successfully.
</p>

<table>

<tr>
<th>Student Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Register Number</th>
<td><?php echo $regno; ?></td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $email; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Course</th>
<td><?php echo $course; ?></td>
</tr>

<tr>
<th>Learning Mode</th>
<td><?php echo $mode; ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Register Another</button>
</a>

</div>

</body>
</html>