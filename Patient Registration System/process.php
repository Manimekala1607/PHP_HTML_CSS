<?php

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$department = $_POST['department'];
$date = $_POST['date'];

?>

<!DOCTYPE html>
<html>
<head>

    <title>Patient Registration Details</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>Patient Registration Details</h2>

    <p class="success">
        Patient Registered Successfully!
    </p>

    <table>

        <tr>
            <th>Patient Name</th>
            <td><?php echo htmlspecialchars($name); ?></td>
        </tr>

        <tr>
            <th>Age</th>
            <td><?php echo htmlspecialchars($age); ?></td>
        </tr>

        <tr>
            <th>Gender</th>
            <td><?php echo htmlspecialchars($gender); ?></td>
        </tr>

        <tr>
            <th>Mobile Number</th>
            <td><?php echo htmlspecialchars($mobile); ?></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>

        <tr>
            <th>Department</th>
            <td><?php echo htmlspecialchars($department); ?></td>
        </tr>

        <tr>
            <th>Appointment Date</th>
            <td><?php echo htmlspecialchars($date); ?></td>
        </tr>

    </table>

    <br>

    <a href="index.php">
        <button>Register Another Patient</button>
    </a>

</div>

</body>
</html>