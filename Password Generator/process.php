<?php

$name=$_POST['name'];
$length=$_POST['length'];

$characters="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$%&*";

$password="";

for($i=0;$i<$length;$i++)
{
    $password .= $characters[rand(0,strlen($characters)-1)];
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Generated Password</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Password Generated Successfully</h2>

<table>

<tr>
<th>Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Password Length</th>
<td><?php echo $length; ?> Characters</td>
</tr>

<tr>
<th>Generated Password</th>
<td><b><?php echo $password; ?></b></td>
</tr>

</table>

<br>

<a href="index.php">
<button>Generate Another Password</button>
</a>

</div>

</body>
</html>