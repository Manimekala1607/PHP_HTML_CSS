<?php

$name = $_POST['name'];
$regno = $_POST['regno'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$year = $_POST['year'];

?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Registration Details</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>🎓 Student Registration Details</h2>

    <p class="success">
        Student Registered Successfully!
    </p>

    <table>

        <tr>
            <th>Student Name</th>
            <td>
                <?php echo htmlspecialchars($name); ?>
            </td>
        </tr>

        <tr>
            <th>Register Number</th>
            <td>
                <?php echo htmlspecialchars($regno); ?>
            </td>
        </tr>

        <tr>
            <th>Email Address</th>
            <td>
                <?php echo htmlspecialchars($email); ?>
            </td>
        </tr>

        <tr>
            <th>Mobile Number</th>
            <td>
                <?php echo htmlspecialchars($mobile); ?>
            </td>
        </tr>

        <tr>
            <th>Gender</th>
            <td>
                <?php echo htmlspecialchars($gender); ?>
            </td>
        </tr>

        <tr>
            <th>Department</th>
            <td>
                <?php echo htmlspecialchars($department); ?>
            </td>
        </tr>

        <tr>
            <th>Year of Study</th>
            <td>
                <?php echo htmlspecialchars($year); ?>
            </td>
        </tr>

    </table>

    <br>

    <a href="index.php">
        <button>Register Another Student</button>
    </a>

</div>

</body>

</html>