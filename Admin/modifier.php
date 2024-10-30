<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php
    require("auth.php");
    include 'config.php';
    $_SESSION["id"]= $_GET['id'];
    $id = $_SESSION["id"];
    $statement = $conn -> prepare("SELECT * FROM user WHERE id = $id");
    $statement->execute();
    $result = $statement->get_result();
    $row = $result->fetch_assoc();

  ?>
<div class="container w-50">


<form method="POST" action="updateuser.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="recipient-name" name="email" value="<?php echo $row['email']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Username:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="username" value="<?php echo $row['username']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Password:</label>
                                    <input type="password" class="form-control" id="recipient-name" name="password" value="<?php echo $row['password']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Phone number:</label>
                                    <input type="number" class="form-control" id="recipient-name" name="phone_number" value="<?php echo $row['phone_number']?>">
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