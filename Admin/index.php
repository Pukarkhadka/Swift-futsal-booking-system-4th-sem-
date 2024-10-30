<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Futsal - Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <form action= "dashboard.php" method="post">
    <h2>Login</h2>
        <div class = form-group>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
           </div>
<div class = "form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
</div>
<div class = "form-group">
            <input type="submit" value="Login">
            </div>
</div>
</form>
</body>
</html>