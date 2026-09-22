<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed">
    <div class="log d-flex justify-content-between">
        <h1 class="ms-3 ps-1 mt-1"><img src="../assets/Logo-2.png" class="sidebar-brand-img me-2" alt="Swift Kick">Swift-<strong>Kick</strong></h1>
        <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
    </div>

    <div class="bg-list d-flex flex-column fw-bold gap-2 mt-4">
        <ul class="d-flex flex-column list-unstyled">
            <li class="h7"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'dashboard.php' ? 'active' : '' ?>" href="dashboard.php"><i class="fal fa-home-lg-alt me-2"></i><span>Home</span></a></li>
            <li class="h7"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'Manageuser.php' ? 'active' : '' ?>" href="Manageuser.php"><i class="far fa-user me-2"></i><span>Users</span></a></li>
            <li class="h7"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'managefutsals.php' ? 'active' : '' ?>" href="managefutsals.php"><i class="fal fa-futbol me-2"></i><span>Futsals</span></a></li>
            <li class="h7"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'managebooking.php' ? 'active' : '' ?>" href="managebooking.php"><i class="fal fa-calendar-alt me-2"></i><span>Bookings</span></a></li>
        </ul>
        <ul class="logout d-flex justify-content-center list-unstyled">
            <li class="h7"><a class="nav-link" href="logout.php"><i class="fal fa-sign-out-alt me-2"></i><span>Logout</span></a></li>
        </ul>
    </div>
</div>