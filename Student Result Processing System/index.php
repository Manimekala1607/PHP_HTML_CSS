<!DOCTYPE html>
<html>
<head>

    <title>Student Result Processing System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>🎓 Student Result Processing</h2>

    <form action="process.php" method="POST">

        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Register Number</label>
        <input type="text" name="regno" required>

        <label>Subject 1 Mark</label>
        <input type="number" name="mark1" min="0" max="100" required>

        <label>Subject 2 Mark</label>
        <input type="number" name="mark2" min="0" max="100" required>

        <label>Subject 3 Mark</label>
        <input type="number" name="mark3" min="0" max="100" required>

        <label>Subject 4 Mark</label>
        <input type="number" name="mark4" min="0" max="100" required>

        <label>Subject 5 Mark</label>
        <input type="number" name="mark5" min="0" max="100" required>

        <input type="submit" value="Process Result">

    </form>

</div>

</body>
</html>