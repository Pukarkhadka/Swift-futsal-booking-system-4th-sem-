<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Kick — Admin Login</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body class="auth-body">
    <div class="auth-shell">
        <div class="auth-card">
            <div class="auth-brand">
                <img src="../assets/Logo-2.png" alt="Swift Kick logo">
                <span class="auth-sub">Admin only</span>
                <h1>Control <span>Room</span></h1>
                <p>Restricted area — staff sign in to manage the platform.</p>
            </div>

            <form action="login_admin.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Admin username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
            </form>

            <p class="auth-alt"><a href="../index.php">Back to Swift Kick</a></p>
        </div>
    </div>
</body>

</html>