<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="Css files/adminlogin.css">
</head>
<body>
<?php
    // Ensure you have a database connection and other necessary setup.
    if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Perform user authentication
    // Replace the following code with your authentication logic
    if ($username === 'admin@123' && $password === 'admin@123') {
    // Authentication successful
    // You can redirect the user to a secure page
    $_SESSION["Adminlogin_sess"]="1";
    header('Location: admin.php');
    exit;
    } 
    else 
    {
        ?>
                    <script>
                        alert("Invalid username or password. Please try again.");
                    </script>
                <?php
        
    }
}
?>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="" method="POST" id="adminLoginForm">
        <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="adminUsername" name="username" placeholder="AdminUsername" required>
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="adminPassword" name="password" placeholder="AdminPassword" required>
    </div>
    <button class="login-button" type="submit" name="login">Login</button>
   </form>
   </div>

</body>
</html>