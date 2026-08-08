<!DOCTYPE html>
<html>
<head>

    <title>Travel Package Booking System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>✈️ Travel Package Booking</h2>

    <form action="process.php" method="POST">

        <label>Customer Name</label>
        <input type="text" name="name" required>

        <label>Email Address</label>
        <input type="email" name="email" required>

        <label>Mobile Number</label>
        <input type="tel"
               name="mobile"
               pattern="[0-9]{10}"
               maxlength="10"
               required>

        <label>Select Destination</label>

        <select name="destination" required>

            <option value="">Select Destination</option>
            <option value="Goa">Goa</option>
            <option value="Kerala">Kerala</option>
            <option value="Ooty">Ooty</option>
            <option value="Manali">Manali</option>
            <option value="Jaipur">Jaipur</option>

        </select>

        <label>Number of Persons</label>
        <input type="number" name="persons" min="1" max="20" required>

        <label>Number of Days</label>
        <input type="number" name="days" min="1" max="30" required>

        <label>Travel Package</label>

        <select name="package" required>

            <option value="">Select Package</option>
            <option value="Standard">Standard - ₹5000/person</option>
            <option value="Premium">Premium - ₹8000/person</option>
            <option value="Luxury">Luxury - ₹12000/person</option>

        </select>

        <input type="submit" value="Book Package">

    </form>

</div>

</body>
</html>