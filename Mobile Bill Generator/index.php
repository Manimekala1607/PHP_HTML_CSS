<!DOCTYPE html>
<html>
<head>
    <title>Mobile Bill Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Mobile Bill Generator</h2>

<form action="process.php" method="POST">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Mobile Number</label>
<input type="text" name="mobile" pattern="[0-9]{10}" required>

<label>Plan Type</label>
<select name="plan" required>
<option value="">Select Plan</option>
<option value="399">Basic Plan (₹399)</option>
<option value="599">Standard Plan (₹599)</option>
<option value="799">Premium Plan (₹799)</option>
</select>

<label>Extra Data Charges (₹)</label>
<input type="number" name="extra" min="0" required>

<input type="submit" value="Generate Bill">

</form>

</div>

</body>
</html>