<?php

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$address=$_POST['address'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Success</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Customer Registration Details</h2>

<p class="success">Registration Successful!</p>

<table>

<tr>
<th>Customer Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Email ID</th>
<td><?php echo $email; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Gender</th>
<td><?php echo $gender; ?></td>
</tr>

<tr>
<th>City</th>
<td><?php echo $city; ?></td>
</tr>

<tr>
<th>Address</th>
<td><?php echo $address; ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Register Another Customer</button>
</a>

</div>

</body>
</html>