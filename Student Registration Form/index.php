<!DOCTYPE html>
<html>
<head>

    <title>Student Registration Form</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>🎓 Student Registration Form</h2>

    <form action="process.php" method="POST">

        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Register Number</label>
        <input type="text" name="regno" required>

        <label>Email Address</label>
        <input type="email" name="email" required>

        <label>Mobile Number</label>
        <input type="tel"
               name="mobile"
               pattern="[0-9]{10}"
               maxlength="10"
               required>

        <label>Gender</label>

        <select name="gender" required>

            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>

        </select>

        <label>Department</label>

        <select name="department" required>

            <option value="">Select Department</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Computer Applications">Computer Applications</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Commerce">Commerce</option>
            <option value="Business Administration">Business Administration</option>

        </select>

        <label>Year of Study</label>

        <select name="year" required>

            <option value="">Select Year</option>
            <option value="First Year">First Year</option>
            <option value="Second Year">Second Year</option>
            <option value="Third Year">Third Year</option>
            <option value="Final Year">Final Year</option>

        </select>

        <input type="submit" value="Register Student">

    </form>

</div>

</body>
</html>