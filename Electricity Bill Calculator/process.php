<?php

$name=$_POST['name'];
$consumer=$_POST['consumer'];
$units=$_POST['units'];

if($units<=100)
{
    $bill=$units*1.50;
}
elseif($units<=200)
{
    $bill=(100*1.50)+(($units-100)*2.50);
}
elseif($units<=300)
{
    $bill=(100*1.50)+(100*2.50)+(($units-200)*4);
}
else
{
    $bill=(100*1.50)+(100*2.50)+(100*4)+(($units-300)*6);
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Electricity Bill</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Electricity Bill Report</h2>

<table>

<tr>
<th>Customer Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Consumer Number</th>
<td><?php echo $consumer; ?></td>
</tr>

<tr>
<th>Units Consumed</th>
<td><?php echo $units; ?></td>
</tr>

<tr>
<th>Total Bill</th>
<td>₹ <?php echo number_format($bill,2); ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Calculate Again</button>
</a>

</div>

</body>
</html>