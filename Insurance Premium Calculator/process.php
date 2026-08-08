<?php

$name=$_POST['name'];
$age=$_POST['age'];
$amount=$_POST['amount'];

if($age<=25)
{
    $rate=5;
}
elseif($age<=40)
{
    $rate=4;
}
elseif($age<=60)
{
    $rate=3;
}
else
{
    $rate=2;
}

$premium=($amount*$rate)/100;

?>

<!DOCTYPE html>
<html>
<head>
<title>Insurance Premium Report</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Insurance Premium Report</h2>

<table>

<tr>
<th>Customer Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Age</th>
<td><?php echo $age; ?></td>
</tr>

<tr>
<th>Insurance Amount</th>
<td>₹ <?php echo number_format($amount,2); ?></td>
</tr>

<tr>
<th>Premium Rate</th>
<td><?php echo $rate; ?>%</td>
</tr>

<tr>
<th>Premium Amount</th>
<td><b>₹ <?php echo number_format($premium,2); ?></b></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Calculate Again</button>
</a>

</div>

</body>
</html>