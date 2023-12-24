<?php
include 'dbcon.php'; // Make sure to include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $date = $_POST["date"];
    $destination = $_POST["destination"];
    $guests = $_POST["guests"];

    // Database connection is already established in dbcon.php

    // SQL query to check availability
    $checkAvailabilityQuery = "SELECT * FROM availability WHERE date = '$date' AND destination = '$destination'";
    $result = mysqli_query($con, $checkAvailabilityQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "Sorry, the selected date and venue are not available.";
    } else {
        // Date and venue are available, proceed with insertion
        // SQL query to insert data into the 'availability' table
        $insertQuery = "INSERT INTO availability (date, destination, guests) 
                        VALUES ('$date', '$destination', '$guests')";

        if (mysqli_query($con, $insertQuery)) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($con);
        }
    }

    // Close the database connection (optional, as PHP will automatically close it)
    // mysqli_close($con);
} else {
    // Handle invalid requests
    echo "Invalid request";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Planner Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-------------------Font Awesome cdn link------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <!------------CSS Link-------------->
    <link rel="stylesheet" href="style.css">

    <!----------icons--------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
<!-------------------header section starts------------------>
<section class="header">
    <div class="flex">
        <a href="#home" class="logo">Sapphire Weddings</a>
        <!--<a href="#availability" class="btn">Check Availability</a>-->
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#availability" class="btn">Check Availability</a>
    </div>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#venue">Venues</a>
        <a href="gallery.php">Gallery</a>
        <a href="contact.php">Contact</a>
    </nav>

</section> 

<!----------------------Home Section Starts---------------->
<section class="home" id="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="box swiper-slide">
               <img src="https://image.wedmegood.com/resized/1900X/uploads/city_bg_image/1/delhi_bg.jpeg" alt="">
            </div>
            <div class="box swiper-slide">
                <img src="images/image2.jpg" alt="">
            </div>
            <div class="box swiper-slide">
                <img src="images/image3.jpg" alt="">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!---------------Availability Section------------->

<section class="availability" id="availability">
    <form action="" method="POST">
        <div class="flex">
            <div class="box">
                <p>What is The Date : <span>*</span></p>
                <input type="date" name="date" class="box" required>
            </div>
            <div class="box">
                <p>Destination : <span>*</span></p>
                <select name="destination" class="input" required>
                    <option disabled selected>Location</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Pune">Pune</option>
                    <option value="Nagpur">Nagpur</option>
                    <option value="Ahemdabad">Ahemdabad</option>
                    <option value="Goa">Goa</option>
                </select>
            </div>
            <div class="box">
                <p>How Many People : <span>*</span></p>
                <select name="guests" class="input" required>
                    <option disabled selected>Guests</option>
                    <option value="75-100">75-100</option>
                    <option value="100-200">100-200</option>
                    <option value="200-500">200-500</option>
                    <option value="500-600">500-600</option>
                    <option value="600 above">600 above</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Check" name="check" class="btn">
        <a href="#pricing" class="btn">Check Plans</a>
    </form>
</section>


<!---------------About  Section------------->
<section class="about" id="about">
    <div class="container">
        <h1 class="title">About Us</h1>
        <div class="about-content">
            <div class="image">
                <img src="https://img.freepik.com/free-photo/young-couple-event-manager-discussing-plan_23-2148085189.jpg?size=626&ext=jpg&ga=GA1.1.202406887.1673940654&semt=ais" alt="">
            </div>
            <div class="content">
                <p> <span>SAPPHIRE WEDDINGS</span> is a premium online wedding planning resource designed by a group of reputed wedding planners to inspire and support couples getting married in India and introduce them to the best wedding venues, most experienced vendors, latest trends and decor ideas to help them plan the wedding of their dreams.
                We hope that Sapphire Weddings serves as a fun and exciting way to get acquainted with the latest trends in the wedding industry. If you’ve ever picked up a bridal magazine or searched the internet for wedding information and felt disheartened by what you didn’t find, well my friend you are in the right place! With years of experience in the wedding industry, we are best able to provide a platform to help couples with smart planning, practical guidance and quality wedding information. We will guide you in every step of the way to ensure you get the best in the wedding industry at the right price.</p>
                <a href="#services" class="servicesbtn">Services</a>
            </div>
        </div>
    </div>
</section>

<!---------------Feature Section------------->
<section class="features" id="features">
    <h1 class="heading">Our <span>Features</span></h1>
    <div class="box-container">
        <div class="fboxf">
            <img src="https://img.freepik.com/free-vector/tiny-people-sitting-huge-clock_74855-7880.jpg?size=626&ext=jpg&ga=GA1.1.202406887.1673940654&semt=ais" alt="">
            <h3>Save Time</h3>
        </div>
        <div class="fboxf">
            <img src="https://img.freepik.com/free-vector/checklist-concept-illustration_114360-479.jpg?size=626&ext=jpg&ga=GA1.1.202406887.1673940654&semt=sph" alt="">
            <h3>Inspired Plans</h3>
        </div>
        <div class="fboxf">
            <img src="https://img.freepik.com/free-vector/reviews-concept-landing-page_52683-18630.jpg?size=626&ext=jpg&ga=GA1.1.202406887.1673940654&semt=ais" alt="">
            <h3>Happy Customers</h3>
        </div>
    </div>
</section>

<section class="services" id="services">
   
    <div class="cotainerS">
        <div class="service-wrapper">
            <div class="service">
                <h1>Services</h1>
                <div class="cards">
                    <div class="card">
                        <i class="fas fa-book-open"></i>
                        <h2>Invitation</h2>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    </div>
                    <div class="card">
                        <i class="fas fa-camera"></i>
                        <h2>Photography</h2>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    </div>
                    <div class="card">
                        <i class="fas fa-brush"></i>
                        <h2>Beauty and Makeup</h2>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    </div>
                    <div class="card">
                        <i class="fab fa-pagelines"></i>
                        <h2>Wedding Flowers</h2>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    </div>
                    <div class="card">
                        <i class="fas fa-birthday-cake"></i>
                        <h2>Wedding Cake</h2>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    </div>
                    <div class="card">
                        <i class="fas fa-music"></i>
                        <h2>Entertainment</h2>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---------------------------Venue Section------------------->
<section class="venue" id="venue" venue>
    <div class="title">
        <h1><span>V</sapan>enues</h1><br>
        <div class="venue-list">
            <div class="venue-box">
                <img src="https://i.pinimg.com/564x/39/7a/77/397a77a4302ca85ad2464e7ff26b2bc2.jpg" alt="">
                <div class="venue-info">
                    <h2>Mumbai</h2>
                    <p>Radisson Blu, Mumbai</p>
                    <button class="btn-book"><a href="booking.php">Book Now</a></button>
                </div>
            </div>
            <div class="venue-box">
                <img src="https://i.pinimg.com/564x/f4/32/68/f43268a9b8d3e9cafb26a2540b94a273.jpg" alt="">
                    <div class="venue-info">
                        <h2>Pune</h2>
                        <p>Dhepe Wada, Pune</p>
                        <button class="btn-book"><a href="booking.php">Book Now</a></button>
                    </div>
                </div>
                <div class="venue-box">
                    <img src="https://i.pinimg.com/564x/21/73/6f/21736fea17e09edb5166e1eb5867a3b7.jpg" alt="">
                    <div class="venue-info">
                        <h2>Nagpur</h2>
                        <p>Anup Hardik Lawns, Nagpur</p>
                        <button class="btn-book"><a href="booking.php">Book Now</a></button>
                    </div>
                </div>
                <div class="venue-box">
                    <img src="https://i.pinimg.com/564x/a8/91/73/a891737a818385eca760c3eb76eb959a.jpg" alt="">
                    <div class="venue-info">
                        <h2>Ahemdabad</h2>
                        <p>Ahemdabad</p>
                        <button class="btn-book"><a href="booking.php">Book Now</a></button>
                    </div>
                </div>
                <div class="venue-box">
                    <img src="https://i.pinimg.com/564x/e4/f6/a4/e4f6a4dd13bbf9152f579cd489d89e27.jpg" alt="">
                    <div class="venue-info">
                        <h2>Goa</h2>
                        <p>Riva Beach Resort, Goa</p>
                        <button class="btn-book"><a href="booking.php">Book Now</a></button>
                    </div>
                </div>
                <div class="venue-box">
                    <img src="https://i.pinimg.com/564x/d2/c0/f3/d2c0f3ba4e77cff0b2446890edfa6b7d.jpg" alt="">
                     <div class="venue-info">
                        <h2>Udaipur</h2>
                        <p>Shree Krishna Resort, Udaipur</p>
                        <button class="btn-book"><a href="booking.php">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>
</section>

<!---------------------Our Price-----------------> 
<h1 class="title">OUR PRICE</h1>
<section class="pricing" id="pricing">
   <div class="card-wrapper">
        <div class="card-header">
            <img src="https://img.freepik.com/free-vector/profitable-pricing-strategy-price-formation-promo-action-clearance-shopping-idea-design-element-cheap-products-advertisement-customers-attraction_335657-1627.jpg?w=740&t=st=1699338222~exp=1699338822~hmac=ae0721f4fd6ca4021bbaa1a7df615b3dc776861e3b72cc8c4fa7f7d22a958606" alt="">
            <h2 class="head">Basic</h2>
        </div>
        <div class="card-detail">
            <p><span class="fas fa-check check"></span> Full Service</p>
            <p><span class="fas fa-check check"></span> Decoration</p>
            <p><span class="fas fa-check check"></span> Entertainment</p>
            <p><span class="fas fa-times nocheck"></span> Photography</p>
            <p><span class="fas fa-times nocheck"></span> Foods and Snacks</p>
            <p><span class="fas fa-times nocheck"></span> Beauty and Makeup</p>
        </div>
        <div class="card-price">
            <p><sup>Rs.</sup>80,000/-</p>
        </div>
        <a class="button" href="booking.php">
            I WANT IT
           </a>
    </div>
    <div class="card-wrapper">
        <div class="card-header">
            <img src="https://img.freepik.com/free-vector/curiosity-people-concept-illustration_114360-11034.jpg?t=st=1699333915~exp=1699334515~hmac=63ee6dcbd3d2dfd60d162a79d70d904a637aa993a3a8fec9a4eecd82ac4c2595" alt="">
            <h2 class="head">Best Plan</h2>
        </div>
        <div class="card-detail">
            <p><span class="fas fa-check check"></span> Full Service</p>
            <p><span class="fas fa-check check"></span> Decoration</p>
            <p><span class="fas fa-check check"></span> Entertainment</p>
            <p><span class="fas fa-times nocheck"></span> Photography</p>
            <p><span class="fas fa-check check"></span> Foods and Snacks</p>
            <p><span class="fas fa-times nocheck"></span> Beauty And Makeup</p>
        </div>
        <div class="card-price">
            <p><sup>Rs.</sup>1,00,000/-</p>
        </div>
        <a class="button" href="booking.php">I WANT IT</a>
    </div>
    <div class="card-wrapper">
        <div class="card-header">
            <img src="https://img.freepik.com/premium-vector/cute-couple-love-adorable-young-man-woman-hugging-cuddling-romantic-date-with-person-found-through-dating-website-mobile-app-romance-affection-flat-cartoon-vector-illustration_198278-6282.jpg" alt="">
            <h2 class="head">Standard</h2>
        </div>
        <div class="card-detail">
            <p><span class="fas fa-check check"></span> Full Service</p>
            <p><span class="fas fa-check check"></span> Decoration</p>
            <p><span class="fas fa-check check"></span> Entertainment</p>
            <p><span class="fas fa-check check"></span> Photography</p>
            <p><span class="fas fa-check check"></span> Foods and Snacks</p>
            <p><span class="fas fa-check check"></span> Beauty And Makeup</p>
        </div>

        <div class="card-price">
            <p><sup>Rs.</sup>2,00,000/-</p>
        </div>
        <a class="button" href="booking.php">
            I WANT IT
        </a>
    </div>
</section>
<!----------------------Footer--------------------->
<div class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h2 class="footer-logo">Sapphire Weddings</h2>
            <p>Your trusted partner for creating magical weddings.</p>
        </div>
        <div class="footer-section">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#venue">Venues</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h2>Contact Us</h2>
            <p>Email: info@sapphireweddings.com</p><br>
            <p>Phone: +123 456 7890</p>
        </div>
        <div class="footer-section">
            <h2>Follow Us</h2>
            <div class="footer-social">
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>
        <a href="adminlogin.php" class="btn">ADMIN LOGIN</a>
    </div>
    <div class="footer-copy">&copy; 2023 Sapphire Weddings. All rights reserved.</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!---------JS Link------->
    <script src="js files/script.js"></script>


</body>
</html>
