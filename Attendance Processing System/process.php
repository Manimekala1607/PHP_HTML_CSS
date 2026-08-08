<?php

function attendancePercentage($present, $working)
{
    return ($present / $working) * 100;
}

$name = $_POST['name'];
$regno = $_POST['regno'];
$working = $_POST['working'];
$present = $_POST['present'];

$percentage = attendancePercentage($present, $working);

if($percentage >= 75)
{
    $status = "Eligible for Examination";
}
else
{
    $status = "Not Eligible for Examination";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance Report</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Attendance Report</h2>

<table>

<tr>
<th>Student Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Register Number</th>
<td><?php echo $regno; ?></td>
</tr>

<tr>
<th>Total Working Days</th>
<td><?php echo $working; ?></td>
</tr>

<tr>
<th>Days Present</th>
<td><?php echo $present; ?></td>
</tr>

<tr>
<th>Attendance Percentage</th>
<td><?php echo number_format($percentage,2)."%"; ?></td>
</tr>

<tr>
<th>Eligibility</th>
<td><?php echo $status; ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Back</button>
</a>

</div>

</body>
</html>