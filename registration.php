
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css files/login.css">
</head>
<body>

<?php

include 'dbcon.php';
    
if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = "select * from signup1 where email='$email' ";
        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);


        if($emailcount>0)
        {
            ?>
                <script>
                    alert("email already exists !");
                </script>
            <?php

        }else{
            if($password === $cpassword){
                $insertquery = "insert into signup1( username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

                $iquery = mysqli_query($con, $insertquery);
                
                if($iquery){
                    ?>
                        <script>
                           location.replace("login.php");
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            alert("No Inserted ! ");
                        </script>
                    <?php
                }
            }
            else{
                ?>
                        <script>
                            alert("Password are not matching ! ");
                        </script>
                    <?php
            }
        }
    }
?>
    <div class="wrapper">
        <h2>Create an Account</h2>
        <form name="form" action="" method="POST">
            <div class="input-box">
                <input type="text" name="username" placeholder="Enter Your Name" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="input-box">
                <input type="number" name="mobile" placeholder="Enter Your Mobile Number" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Create Password" required>
            </div>
           <div class="input-box">
                <input type="password" name="cpassword" placeholder="Confirm Password" required>
            </div>
            <div class="policy">
                <input type="checkbox"><h3>I accept Terms & conditions</h3>
            </div>
            <div class="input-box button">
                <input type="submit" name="submit" value="Create an Account">
            </div>
            <div class="text">
                <h3>Already Have an Account?<a href="login.php">Login Now</a></h3>
            </div>
        </form>
   
        
    </div>
</body>
</html>