<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Kick — Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="auth-body">
    <div id="message"></div>
    <div class="auth-shell wide">
        <div class="auth-card">
            <div class="auth-brand">
                <img src="assets/Logo-2.png" alt="Swift Kick logo">
                <span class="auth-sub">Join the squad</span>
                <h1>Swift<span>Kick</span></h1>
                <p>Create your account and book your first court in minutes.</p>
            </div>

            <form action="./adddata.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Your display name" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" id="Email" name="email" placeholder="you@example.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Choose a strong password" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone number</label>
                    <input type="number" id="phone_number" name="phone_number" placeholder="98XXXXXXXX" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Register">
                </div>
            </form>

            <p class="auth-alt">Already have an account? <a href="login.php">Login</a></p>
        </div>
        <p class="auth-note"><a href="index.php">Back to home</a></p>
    </div>
</body>

</html>
