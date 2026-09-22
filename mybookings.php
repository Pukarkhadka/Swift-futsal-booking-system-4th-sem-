<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
$email = $_SESSION['email'];
$pageTitle = 'Swift Kick — My Bookings';
include __DIR__ . '/components/header.php';
?>

    <section class="page-banner">
        <div class="container">
            <div class="breadcrumb-sk"><a href="index.php">Home</a> <span>/</span> <span>My Bookings</span></div>
            <h1>My Bookings</h1>
            <p>All your upcoming matches and court reservations in one place.</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="container">
            <div class="data-card">
                <div class="card-head">
                    <div>
                        <h2>Reservation list</h2>
                        <div class="chalk-line" style="width:70px;margin-top:8px"></div>
                    </div>
                    <a href="booking.php" class="btn-sk btn-pitch">+ New booking</a>
                </div>

                <div class="table-wrap">
                    <table class="table-sk">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Court</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'db_connect.php';
                            $query = "SELECT bookings.*, futsals.Name AS court, futsals.Price AS price 
                            FROM bookings 
                            JOIN futsals ON bookings.court = futsals.ID 
                            WHERE email='$email'";

                            $result = $conn ? mysqli_query($conn, $query) : false;
                            $hasRows = false;
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $hasRows = true;
                            ?>
                                    <tr>
                                        <td><?= $row['ID'] ?></td>
                                        <td><?= htmlspecialchars($row['email']) ?></td>
                                        <td><span class="chip"><?= date("d M Y", strtotime($row['booking_date'])) ?></span></td>
                                        <td><?= date("g:i A", strtotime($row['start_time'])) ?></td>
                                        <td><?= date("g:i A", strtotime($row['end_time'])) ?></td>
                                        <td><strong><?= htmlspecialchars($row['court']) ?></strong></td>
                                        <td>&#8377;<?= htmlspecialchars($row['price']) ?></td>
                                        <td>
                                            <a class="link-danger-sk" href="removebooking.php?id=<?= $row['ID'] ?>"
                                                onclick="return confirm('Do you want to cancel ?')">Cancel Booking</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            if (!$hasRows):
                            ?>
                                <tr>
                                    <td colspan="8" style="text-align:center;padding:44px 18px;color:var(--muted)">
                                        <strong style="display:block;font-family:var(--font-display);font-size:1.3rem;text-transform:uppercase;color:var(--pitch-deep)">No bookings yet</strong>
                                        Your reserved courts will appear here. Time to get on the pitch.
                                        <div style="margin-top:16px"><a href="booking.php" class="btn-sk btn-pitch">Book your first court</a></div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>

</html>
