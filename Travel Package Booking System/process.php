<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$destination = $_POST['destination'];
$persons = $_POST['persons'];
$days = $_POST['days'];
$package = $_POST['package'];

if($package == "Standard")
{
    $price = 5000;
}
elseif($package == "Premium")
{
    $price = 8000;
}
else
{
    $price = 12000;
}

$packageAmount = $price * $persons;

$dayCharge = $packageAmount * 0.10 * ($days - 1);

$totalAmount = $packageAmount + $dayCharge;

?>

<!DOCTYPE html>
<html>

<head>

    <title>Travel Booking Details</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>🎫 Travel Booking Confirmation</h2>

    <p class="success">
        Booking Processed Successfully!
    </p>

    <table>

        <tr>
            <th>Customer Name</th>
            <td>
                <?php echo htmlspecialchars($name); ?>
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
            <th>Destination</th>
            <td>
                <?php echo htmlspecialchars($destination); ?>
            </td>
        </tr>

        <tr>
            <th>Number of Persons</th>
            <td>
                <?php echo $persons; ?>
            </td>
        </tr>

        <tr>
            <th>Number of Days</th>
            <td>
                <?php echo $days; ?>
            </td>
        </tr>

        <tr>
            <th>Selected Package</th>
            <td>
                <?php echo htmlspecialchars($package); ?>
            </td>
        </tr>

        <tr>
            <th>Package Price / Person</th>
            <td>
                ₹ <?php echo number_format($price, 2); ?>
            </td>
        </tr>

        <tr>
            <th>Package Amount</th>
            <td>
                ₹ <?php echo number_format($packageAmount, 2); ?>
            </td>
        </tr>

        <tr>
            <th>Additional Day Charge</th>
            <td>
                ₹ <?php echo number_format($dayCharge, 2); ?>
            </td>
        </tr>

        <tr class="total">

            <th>Total Booking Amount</th>

            <td>
                <b>
                    ₹ <?php echo number_format($totalAmount, 2); ?>
                </b>
            </td>

        </tr>

    </table>

    <br>

    <a href="index.php">
        <button>Book Another Package</button>
    </a>

</div>

</body>
</html>