<?php

$name = $_POST['name'];
$regno = $_POST['regno'];

$mark1 = $_POST['mark1'];
$mark2 = $_POST['mark2'];
$mark3 = $_POST['mark3'];
$mark4 = $_POST['mark4'];
$mark5 = $_POST['mark5'];

$total = $mark1 + $mark2 + $mark3 + $mark4 + $mark5;

$average = $total / 5;

if(
    $mark1 < 35 ||
    $mark2 < 35 ||
    $mark3 < 35 ||
    $mark4 < 35 ||
    $mark5 < 35
)
{
    $result = "FAIL";
    $grade = "F";
}
else
{
    $result = "PASS";

    if($average >= 90)
    {
        $grade = "A+";
    }
    elseif($average >= 80)
    {
        $grade = "A";
    }
    elseif($average >= 70)
    {
        $grade = "B";
    }
    elseif($average >= 60)
    {
        $grade = "C";
    }
    elseif($average >= 50)
    {
        $grade = "D";
    }
    else
    {
        $grade = "E";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>📊 Student Result</h2>

    <p class="success">
        Result Processed Successfully!
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
            <th>Subject 1</th>
            <td><?php echo $mark1; ?></td>
        </tr>

        <tr>
            <th>Subject 2</th>
            <td><?php echo $mark2; ?></td>
        </tr>

        <tr>
            <th>Subject 3</th>
            <td><?php echo $mark3; ?></td>
        </tr>

        <tr>
            <th>Subject 4</th>
            <td><?php echo $mark4; ?></td>
        </tr>

        <tr>
            <th>Subject 5</th>
            <td><?php echo $mark5; ?></td>
        </tr>

        <tr>
            <th>Total Marks</th>
            <td>
                <?php echo $total; ?> / 500
            </td>
        </tr>

        <tr>
            <th>Average</th>
            <td>
                <?php echo number_format($average, 2); ?>%
            </td>
        </tr>

        <tr>
            <th>Grade</th>
            <td>
                <b><?php echo $grade; ?></b>
            </td>
        </tr>

        <tr class="result-row">
            <th>Result</th>
            <td>
                <b><?php echo $result; ?></b>
            </td>
        </tr>

    </table>

    <br>

    <a href="index.php">
        <button>Process Another Result</button>
    </a>

</div>

</body>
</html>