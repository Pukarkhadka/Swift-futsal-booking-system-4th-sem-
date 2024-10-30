<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Futsal - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login_user.php" method="post">
        <div class = form-group>
            <label for="email">Email:</label>
            <input type="email" id="Email" name="email" required>
    </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Login">
            </div>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</body>
</html>
