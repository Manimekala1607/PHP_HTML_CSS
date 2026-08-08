<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);

$mobileValid = preg_match("/^[0-9]{10}$/", $mobile);

$passwordValid = preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/", $password);

?>

<!DOCTYPE html>
<html>
<head>
<title>Validation Result</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Applicant Validation Result</h2>

<table>

<tr>
<th>Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Email</th>
<td>
<?php
if($emailValid)
echo "Valid Email";
else
echo "Invalid Email";
?>
</td>
</tr>

<tr>
<th>Mobile</th>
<td>
<?php
if($mobileValid)
echo "Valid Mobile Number";
else
echo "Invalid Mobile Number";
?>
</td>
</tr>

<tr>
<th>Password</th>
<td>
<?php
if($passwordValid)
echo "Strong Password";
else
echo "Weak Password";
?>
</td>
</tr>

</table>

<br>

<a href="index.php">
<button>Go Back</button>
</a>

</div>

</body>
</html>