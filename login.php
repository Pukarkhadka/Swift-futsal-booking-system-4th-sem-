<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Kick — Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="auth-body">
    <div class="auth-shell">
        <div class="auth-card">
            <div class="auth-brand">
                <img src="assets/Logo-2.png" alt="Swift Kick logo">
                <span class="auth-sub">Welcome back</span>
                <h1>Swift<span>Kick</span></h1>
                <p>Sign in to manage your court bookings.</p>
            </div>

            <form action="login_user.php" method="post">
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" id="Email" name="email" placeholder="you@example.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
            </form>

            <p class="auth-alt">Don't have an account? <a href="register.php">Register now</a></p>
        </div>
        <p class="auth-note">New here? <a href="register.php">Create an account</a> &middot; <a href="index.php">Back to home</a></p>
    </div>
</body>

</html>
