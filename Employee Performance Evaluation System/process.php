<?php

$empid=$_POST['empid'];
$name=$_POST['name'];
$department=$_POST['department'];
$score=$_POST['score'];

if($score>=90)
{
    $grade="Excellent";
}
elseif($score>=75)
{
    $grade="Very Good";
}
elseif($score>=60)
{
    $grade="Good";
}
elseif($score>=50)
{
    $grade="Average";
}
else
{
    $grade="Needs Improvement";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Performance Report</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Performance Evaluation Report</h2>

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
<th>Performance Score</th>
<td><?php echo $score; ?></td>
</tr>

<tr>
<th>Performance Grade</th>
<td><b><?php echo $grade; ?></b></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Evaluate Another Employee</button>
</a>

</div>

</body>
</html>