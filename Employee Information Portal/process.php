<?php

$empid=$_POST['empid'];
$name=$_POST['name'];
$department=$_POST['department'];
$designation=$_POST['designation'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Profile</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Employee Profile</h2>

<p class="success">Employee Information Saved Successfully!</p>

<table>

<tr>
<th>Employee ID</th>
<td><?php echo $empid; ?></td>
</tr>

<tr>
<th>Employee Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Department</th>
<td><?php echo $department; ?></td>
</tr>

<tr>
<th>Designation</th>
<td><?php echo $designation; ?></td>
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
<th>Address</th>
<td><?php echo $address; ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Add Another Employee</button>
</a>

</div>

</body>
</html>