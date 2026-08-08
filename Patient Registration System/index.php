<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Patient Registration</h2>

    <form action="process.php" method="POST">

        <label>Patient Name</label>
        <input type="text" name="name" required>

        <label>Age</label>
        <input type="number" name="age" min="1" max="120" required>

        <label>Gender</label>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label>Mobile Number</label>
        <input type="tel" name="mobile"
               pattern="[0-9]{10}"
               maxlength="10"
               required>

        <label>Email Address</label>
        <input type="email" name="email" required>

        <label>Department</label>
        <select name="department" required>
            <option value="">Select Department</option>
            <option value="General Medicine">General Medicine</option>
            <option value="Cardiology">Cardiology</option>
            <option value="Neurology">Neurology</option>
            <option value="Orthopedics">Orthopedics</option>
            <option value="Pediatrics">Pediatrics</option>
        </select>

        <label>Appointment Date</label>
        <input type="date" name="date" required>

        <input type="submit" value="Register Patient">

    </form>

</div>

</body>
</html>