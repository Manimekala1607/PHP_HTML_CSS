<?php

$student=$_POST['student'];
$parent=$_POST['parent'];
$class=$_POST['class'];
$teacher=$_POST['teacher'];
$date=$_POST['date'];
$mobile=$_POST['mobile'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Details</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Meeting Registration Successful</h2>

<p class="success">Your Parent-Teacher Meeting has been registered successfully.</p>

<table>

<tr>
<th>Student Name</th>
<td><?php echo $student; ?></td>
</tr>

<tr>
<th>Parent Name</th>
<td><?php echo $parent; ?></td>
</tr>

<tr>
<th>Class</th>
<td><?php echo $class; ?></td>
</tr>

<tr>
<th>Teacher Name</th>
<td><?php echo $teacher; ?></td>
</tr>

<tr>
<th>Meeting Date</th>
<td><?php echo $date; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Register Another</button>
</a>

</div>

</body>
</html>