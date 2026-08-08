<!DOCTYPE html>
<html>
<head>
    <title>String Analysis System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>String Analysis System</h2>

    <form action="process.php" method="POST">

        <label>Enter a String</label>

        <textarea name="text"
                  rows="6"
                  placeholder="Enter your text here..."
                  required></textarea>

        <input type="submit" value="Analyze String">

    </form>

</div>

</body>
</html>