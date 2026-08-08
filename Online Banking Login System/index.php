<!DOCTYPE html>
<html>

<head>

<title>Online Banking Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Online Banking Login</h2>

<form action="login.php" method="post">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Customer ID</label>
<input type="text" name="id" required>

<label>Account Number</label>
<input type="text" name="account" required pattern="[0-9]{10,12}">

<label>Account Type</label>

<select name="type" required>

<option value="">Select Account</option>
<option>Savings</option>
<option>Current</option>

</select>

<label>Password</label>

<input type="password" name="password" minlength="6" required>

<button type="submit">

Login

</button>

</form>

</div>

</body>

</html>