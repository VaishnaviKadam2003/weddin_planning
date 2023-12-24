<?php
include 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $venue = $_POST["venue"];
    $date = $_POST["date"];
    $cardHolderName = $_POST["card_holder_name"];
    $cardNumber = $_POST["card_number"];
    $expMonth = $_POST["exp_month"];
    $expYear = $_POST["exp_year"];
    $cvv = $_POST["cvv"];

    // Database connection is already established in dbcon.php

    // SQL query to insert data into the 'booking' table
    $sql = "INSERT INTO booking (name, email, phone, city, zip, venue, date, card_holder_name, card_number, exp_month, exp_year, cvv) 
            VALUES ('$name', '$email', '$phone', '$city', '$zip', '$venue', '$date', '$cardHolderName', '$cardNumber', '$expMonth', '$expYear', '$cvv')";

    if (mysqli_query($con, $sql)) {
        ?>
                <script>
                    alert("Booking successful!");
                </script>
            <?php
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection (optional, as PHP will automatically close it)
     mysqli_close($con);

}
 else {
    // Handle invalid requests
    ?>
                <script>
                    alert("Responding");
                </script>
            <?php
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link rel="stylesheet" href="Css files/booking1.css">
</head>
<body>

    <div class="container">

    <form action="booking.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="User Name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>Phone Number :</span>
                    <input type="tel" name="phone" placeholder="+91 0000 0000 00">
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>add :</span>
                        <input type="text" name="city" placeholder="city">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zip" placeholder="123 456">
                    </div>
                </div>
                <div class="inputBox">
                    <span>Venue :</span>
                    <select id="venue" name="venue" required>
                        <option value="Radisson Blu, Mumbai">Radisson Blu, Mumbai</option>
                        <option value="Dhepe Wada, Pune">Dhepe Wada, Pune</option>
                        <option value="Anup Hardik Lawns, Nagpur">Anup Hardik Lawns, Nagpur</option>
                        <option value="Infinity Event Place, Ahemdabad">Infinity Event Place, Ahemdabad</option>
                        <option value="Riva Beach Resort, Goa">Riva Beach Resort, Goa</option>
                        <option value="Shree Krishna Resort, Udaipur">Shree Krishna Resort, Udaipur</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Event Date :</span>
                    <input type="date" name="date" placeholder="">
                </div>
                

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="card_holder_name" placeholder="Name On Card">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="card_number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="exp_month" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="exp_year" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" name="submit" value="proceed to checkout" class="submit-btn">

    </form>
</body>
</html>