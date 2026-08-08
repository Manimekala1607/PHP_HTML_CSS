<?php

$name=$_POST['name'];
$regno=$_POST['regno'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$membership=$_POST['membership'];
$department=$_POST['department'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Membership Details</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Library Membership Details</h2>

<p class="success">Membership Registered Successfully!</p>

<table>

<tr>
<th>Member Name</th>
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
<th>Membership Type</th>
<td><?php echo $membership; ?></td>
</tr>

<tr>
<th>Department</th>
<td><?php echo $department; ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Register Another Member</button>
</a>

</div>

</body>
</html>