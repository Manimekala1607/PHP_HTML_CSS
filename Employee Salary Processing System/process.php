<?php

$empid=$_POST['empid'];
$name=$_POST['name'];
$basic=$_POST['basic'];

$hra=$basic*0.20;
$da=$basic*0.10;
$pf=$basic*0.08;

$gross=$basic+$hra+$da;
$net=$gross-$pf;

?>

<!DOCTYPE html>
<html>
<head>
<title>Salary Report</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Employee Salary Report</h2>

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
<th>Basic Salary</th>
<td>₹ <?php echo number_format($basic,2); ?></td>
</tr>

<tr>
<th>HRA (20%)</th>
<td>₹ <?php echo number_format($hra,2); ?></td>
</tr>

<tr>
<th>DA (10%)</th>
<td>₹ <?php echo number_format($da,2); ?></td>
</tr>

<tr>
<th>PF (8%)</th>
<td>₹ <?php echo number_format($pf,2); ?></td>
</tr>

<tr>
<th>Gross Salary</th>
<td><b>₹ <?php echo number_format($gross,2); ?></b></td>
</tr>

<tr>
<th>Net Salary</th>
<td><b>₹ <?php echo number_format($net,2); ?></b></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Calculate Another Salary</button>
</a>

</div>

</body>
</html>