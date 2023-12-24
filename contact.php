<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="Css files/contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="contact-container">
        <div class="contact-item">
            <div class="contact">
                <div class="first-text">Let's Get In Touch !</div>
                <img src="https://i0.wp.com/wedlockservices.com/wp-content/uploads/2022/12/wp.jpg?fit=1000%2C1000&ssl=1" alt="" class="image">
                <div class="social-link">
                    <span class="second-text">Connect with us:</span>
                    <ul class="social-media">
                        <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
                        <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="submit-form">

                <?php
                    if(!empty($_POST["submit"]))
                    {
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $phone = $_POST["phone"];
                        $msg = $_POST["msg"];
                        $toEmail = "vaishnavikadam340@gmail.com";

                        $mailHeaders = "Name: " . $name .
                        "\r\n Email: " . $email .
                        "\r\n Phone No. : " . $phone .
                        "\r\n Message: " . $msg .  "\r\n";
                        
                        if(mail($toEmail, $name, $mailHeaders)){
                            $message = "Thank You ! Your message has been sent.";
                        }
                           
                    }

                ?>
                <h4 class="third-text">Contact Us</h4>
                <form action="#" method="POST">
                    <div class="input-box">
                        <input type="text" name="name" class="input" required>
                        <label for="">Name</label>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" class="input" required>
                        <label for="">Email</label>
                    </div>
                    <div class="input-box">
                        <input type="tel" name="phone" class="input" required>
                        <label for="">Phone Number</label>
                    </div>
                    <div class="input-box">
                        <textarea name="msg" class="input" required id="message" cols="30" rows="10"></textarea>
                        <label for="">Write Message</label>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Submit">
                    <?php if(!empty($message)){ ?>
                        <div class="success">
                            <strong><?php echo $message; ?></strong>
                        </div>
                    <?php } ?>
                </form>
           
            </div>
        </div>
    </div>
</body>
</html>