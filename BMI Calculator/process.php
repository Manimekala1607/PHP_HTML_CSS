<?php

$name=$_POST['name'];
$height=$_POST['height'];
$weight=$_POST['weight'];

$bmi=$weight/($height*$height);

if($bmi<18.5)
{
$status="Underweight";
$recommendation="Eat a balanced diet and consult a nutritionist.";
}
elseif($bmi<25)
{
$status="Normal Weight";
$recommendation="Maintain your healthy lifestyle.";
}
elseif($bmi<30)
{
$status="Overweight";
$recommendation="Exercise regularly and reduce junk food.";
}
else
{
$status="Obese";
$recommendation="Consult a doctor and follow a healthy diet plan.";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>BMI Result</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>BMI Result</h2>

<table>

<tr>
<th>Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Height</th>
<td><?php echo $height; ?> m</td>
</tr>

<tr>
<th>Weight</th>
<td><?php echo $weight; ?> kg</td>
</tr>

<tr>
<th>BMI</th>
<td><?php echo number_format($bmi,2); ?></td>
</tr>

<tr>
<th>Health Status</th>
<td><?php echo $status; ?></td>
</tr>

<tr>
<th>Recommendation</th>
<td><?php echo $recommendation; ?></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Calculate Again</button>
</a>

</div>

</body>
</html>