<!DOCTYPE html>
<html>
<head>
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Password Generator</h2>

<form action="process.php" method="POST">

<label>Enter Your Name</label>
<input type="text" name="name" required>

<label>Password Length</label>
<select name="length" required>
<option value="">Select Length</option>
<option value="8">8 Characters</option>
<option value="10">10 Characters</option>
<option value="12">12 Characters</option>
<option value="16">16 Characters</option>
</select>

<input type="submit" value="Generate Password">

</form>

</div>

</body>
</html>