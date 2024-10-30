<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Futsal - Register</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
   <div id="message"></div>
    <div class="container">
        <h2>Register</h2>
        <form action="./adddata.php" method="post">
        <div class="form-group">
            <label for="Username">Username:</label>
            <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
            <label for="Email">Email:</label>
            <input type="Email" id="Email" name="email" required>
            </div>
            <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
            <label for="phone number">Phone number:</label>
            <input type="number" id="phone_number" name="phone_number" required>
            </div>
            <div class="form-group">
            <input type="submit" value="Register">
            </div>
       
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    </form>
</body>
</html>
<?php
?>