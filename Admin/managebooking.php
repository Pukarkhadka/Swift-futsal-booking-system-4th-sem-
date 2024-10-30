<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Booking</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
      
        <?php 
            include "component/sidebar.php";
        ?>
        
        <div class="container-fluid px-4">
        
        
            <div class="users-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Bookings</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <!-- <i class="far fa-sort"></i> -->
                    </div>
                    <!-- <?php include 'component/popupadd.php'; ?> -->
                </div>
            </div>
            <div class="table-responsive">
                <table class="table users table-borderless">
                    <thead>
                    <tr class="align-middle">
                            <th>ID</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Court</th>
                            <th>Price</th>
                            <th>Delete/Edit</th>
                    </thead>
                    <tbody>
                        <?php
                          include 'config.php';
                          $query = "
                            SELECT bookings.ID, bookings.email, bookings.booking_date, bookings.start_time, bookings.end_time, futsals.Name as court, futsals.Price 
                            FROM bookings 
                            JOIN futsals ON bookings.court = futsals.ID
                          ";
                          $result = $conn -> query($query);
                          foreach($result as $value):
?>
                        
                    
                      <td><?php echo $value['ID'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td><?php echo $value['booking_date'] ?></td>
                                <td><?= date("g:i A", strtotime($value['start_time'])); ?></td>
                                <td><?= date("g:i A", strtotime($value['end_time']));?></td>
                                <td><?php echo $value['court'] ?></td>
                                <td><?php echo $value['Price'] ?></td>
                                <td class="d-md-flex gap-2 mt-3">
                                  <a href="removebooking.php?id=<?php echo $value['ID']?>" onclick="return confirm('Are you sure you want to delete this booking?');">Delete</a>/
                                  <a href="modifierbooking.php?id=<?php echo $value['ID']?>">Edit</i></a>
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
