<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings — Swift Kick</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <?php include "component/sidebar.php"; ?>

        <div class="container-fluid px-4">
            <div class="users-header d-flex justify-content-between align-items-center py-3">
                <div>
                    <span class="page-kicker">Match schedule</span>
                    <div class="title">Bookings</div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table users table-borderless">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Court</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php';
                        $query = "
                            SELECT bookings.ID, bookings.email, bookings.booking_date, bookings.start_time, bookings.end_time, futsals.Name as court, futsals.Price
                            FROM bookings
                            JOIN futsals ON bookings.court = futsals.ID
                        ";
                        $result = $conn->query($query);
                        foreach ($result as $value):
                        ?>
                            <tr>
                                <td><span class="badge-chip">#<?php echo $value['ID'] ?></span></td>
                                <td><?php echo htmlspecialchars($value['email']) ?></td>
                                <td><?php echo $value['booking_date'] ?></td>
                                <td><?= date("g:i A", strtotime($value['start_time'])) ?></td>
                                <td><?= date("g:i A", strtotime($value['end_time'])) ?></td>
                                <td><strong><?php echo htmlspecialchars($value['court']) ?></strong></td>
                                <td><span class="badge-chip">&#8377;<?php echo htmlspecialchars($value['Price']) ?></span></td>
                                <td>
                                    <div class="btn-group-user">
                                        <a href="modifierbooking.php?id=<?php echo $value['ID'] ?>"><i class="far fa-pen me-1"></i>Edit</a>
                                        <a class="danger-link" href="removebooking.php?id=<?php echo $value['ID'] ?>"
                                            onclick="return confirm('Are you sure you want to delete this booking?');"><i class="far fa-trash-alt me-1"></i>Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>