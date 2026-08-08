<!DOCTYPE html>
<html>


<head>


<title>Banking Dashboard</title>


<link rel="stylesheet" href="style.css">


</head>


<body>


<div class="container">


<?php


$name=$_POST["name"];
$id=$_POST["id"];
$account=$_POST["account"];
$type=$_POST["type"];


$balance=75500;


?>


<h2>Welcome to Online Banking</h2>


<p class="success">


✔ Login Successful


</p>


<table>


<tr>


<td>Customer Name</td>


<td><?php echo $name; ?></td>


</tr>


<tr>


<td>Customer ID</td>


<td><?php echo $id; ?></td>


</tr>


<tr>


<td>Account Number</td>


<td><?php echo $account; ?></td>


</tr>


<tr>


<td>Account Type</td>


<td><?php echo $type; ?></td>


</tr>


<tr>


<td>Available Balance</td>


<td><b>₹<?php echo number_format($balance,2); ?></b></td>


</tr>


</table>


<a href="index.php" class="back">


Back to Login


</a>


</div>


</body>


</html>
