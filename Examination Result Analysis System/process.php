<?php

$name=$_POST['name'];
$regno=$_POST['regno'];

$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];

$total=$m1+$m2+$m3+$m4+$m5;
$average=$total/5;

if($m1>=35 && $m2>=35 && $m3>=35 && $m4>=35 && $m5>=35)
{
    $result="PASS";

    if($average>=90)
        $grade="O Grade";
    elseif($average>=80)
        $grade="A+ Grade";
    elseif($average>=70)
        $grade="A Grade";
    elseif($average>=60)
        $grade="B Grade";
    elseif($average>=50)
        $grade="C Grade";
    else
        $grade="D Grade";
}
else
{
    $result="FAIL";
    $grade="No Grade";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Result Report</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Examination Result Report</h2>

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
<th>Total Marks</th>
<td><?php echo $total; ?>/500</td>
</tr>

<tr>
<th>Average</th>
<td><?php echo number_format($average,2); ?></td>
</tr>

<tr>
<th>Result</th>
<td><?php echo $result; ?></td>
</tr>

<tr>
<th>Grade</th>
<td><?php echo $grade; ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Check Another Result</button>
</a>

</div>

</body>
</html>