<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="Css files/login.css">
</head>
<body>
<?php
    include 'dbcon.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = " select * from signup1 where email='$email' ";
        $query = mysqli_query($con,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count)
        {
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];

            $_SESSION['username'] = $email_pass['username'];

            $pass_code = password_verify($password, $db_pass);

            if($pass_code)
            {
                ?>
                    <script>
                        location.replace("index.php");
                    </script>
                <?php
            }
            else
            {
                ?>
                    <script>
                        alert("Password  Incorrect");
                    </script>
                <?php
            }
        }
        else
        {
            ?>
                <script>
                    alert("Invalid Email !");
                </script>
            <?php
        }
    }
?>
    <div class="wrapper">
        <h2>Login</h2>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter The Password" required>
            </div>
            
            <div class="policy">
                <input type="checkbox"><h3>Remember me</h3>
            </div>
            <div class="input-box button">
                <input type="submit" name="submit" value="Login Now">
            </div>
            <div class="text">
                <h3>Don't Have any Account<a href="registration.php">Register Now</a></h3>
            </div>
        </form>
   
        
    </div>
</body>
</html>