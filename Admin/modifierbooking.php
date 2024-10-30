<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php

  include 'config.php';
  $_SESSION['ID'] = $_GET['id'];
  $booking_id = $_SESSION['ID'];
  $result = mysqli_query($conn, "SELECT * FROM bookings WHERE ID = $booking_id");
  $booking = mysqli_fetch_assoc($result);
  ?>
  <div class="container w-50">


    <form method="POST" action="updatebooking.php?id=<?= $booking['ID'];?>" enctype="multipart/form-data">
      <div class="">
        <label for="recipient-name" class="col-form-label">Email:</label>
        <input type="email" class="form-control" id="recipient-name" name="email" value="<?= $booking['email'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Date:</label>
        <input type="date" class="form-control" id="recipient-name" name="date" value="<?= $booking['booking_date'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Start time:</label>
        <input type="time" class="form-control" id="recipient-name" name="start_time"
          value="<?php echo $booking['start_time'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">End time:</label>
        <input type="time" class="form-control" id="recipient-name" name="end_time"
          value="<?php echo $booking['end_time'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Court:</label>
        <select id="court" name="court" required>

          <?php
          $result = mysqli_query($conn, "SELECT * FROM futsals");
          while ($futsal = mysqli_fetch_array($result)) {
            if ($booking['court'] == $futsal['ID']) { ?>
              <option value="<?= $futsal['ID']; ?>" selected>
                <?= $futsal['Name'] ?>
              </option>
            <?php } else {?>
              <option value="<?= $futsal['ID']; ?>">
                <?= $futsal['Name'] ?>
              </option>
            <?php
         } } ?>
        </select>
      </div>

      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
  <script src="../js/script.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>