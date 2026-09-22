<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Swift Kick' ?></title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
</head>

<body>
    <header class="site-nav">
        <div class="container nav-inner">
            <a class="brand" href="index.php">
                <img src="assets/Logo-2.png" alt="Swift Kick logo">
                <span>Swift<strong>Kick</strong></span>
            </a>
            <button class="nav-toggle" type="button" aria-label="Toggle navigation" onclick="document.body.classList.toggle('nav-open')">
                <span></span><span></span><span></span>
            </button>
            <nav class="nav-links">
                <a href="index.php">Home</a>
                <a href="index.php#courts">All Courts</a>
                <a href="booking.php">Book</a>
                <?php if (isset($_SESSION['email'])): ?>
                    <a href="mybookings.php">My Bookings</a>
                    <a class="nav-user" data-initial="<?= strtoupper(substr($_SESSION['email'], 0, 1)) ?>" href="mybookings.php"><?= htmlspecialchars($_SESSION['email']) ?></a>
                    <a class="btn-sk btn-lime" href="logout.php">Logout</a>
                <?php else: ?>
                    <a class="btn-sk btn-ghost" href="login.php">Login</a>
                    <a class="btn-sk btn-lime" href="register.php">Register</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
