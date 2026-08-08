<?php

$fname = strtolower(trim($_POST['fname']));
$lname = strtolower(trim($_POST['lname']));
$department = strtolower($_POST['department']);

$email = $fname . "." . $lname . "@" . $department . ".company.com";

?>

<!DOCTYPE html>
<html>
<head>
<title>Generated Email ID</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Employee Email Details</h2>

<table>

<tr>
<th>First Name</th>
<td><?php echo ucfirst($fname); ?></td>
</tr>

<tr>
<th>Last Name</th>
<td><?php echo ucfirst($lname); ?></td>
</tr>

<tr>
<th>Department</th>
<td><?php echo ucfirst($department); ?></td>
</tr>

<tr>
<th>Generated Email ID</th>
<td><b><?php echo $email; ?></b></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Generate Another</button>
</a>

</div>

</body>
</html>