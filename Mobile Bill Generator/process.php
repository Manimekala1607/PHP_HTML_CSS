<?php

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$plan=$_POST['plan'];
$extra=$_POST['extra'];

$total=$plan+$extra;

?>

<!DOCTYPE html>
<html>
<head>
<title>Mobile Bill Report</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Mobile Bill Report</h2>

<table>

<tr>
<th>Customer Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Plan Amount</th>
<td>₹ <?php echo $plan; ?></td>
</tr>

<tr>
<th>Extra Charges</th>
<td>₹ <?php echo $extra; ?></td>
</tr>

<tr>
<th>Total Bill</th>
<td><b>₹ <?php echo number_format($total,2); ?></b></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Generate Another Bill</button>
</a>

</div>

</body>
</html>