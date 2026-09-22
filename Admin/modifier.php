<?php require("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User — Swift Kick</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-content">
  <?php
    include 'config.php';
    $_SESSION["id"] = $_GET['id'];
    $id = $_SESSION["id"];
    $statement = $conn->prepare("SELECT * FROM user WHERE id = ?");
    $statement->bind_param("i", $id);
    $statement->execute();
    $result = $statement->get_result();
    $row = $result->fetch_assoc();
  ?>
    <main class="d-flex justify-content-center">
        <div class="container w-50 mt-5">
            <div class="dashboard-page-title mb-4">
                <span class="page-kicker">Squad department</span>
                <h1>Edit User</h1>
                <p>Update the details below and save your changes.</p>
            </div>
            <div class="card__items card__items--blue p-4" style="width:auto;height:auto">
                <form method="POST" action="updateuser.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($row['email']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($row['username']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($row['password']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone number:</label>
                        <input type="number" class="form-control" id="phone_number" name="phone_number" value="<?php echo htmlspecialchars($row['phone_number']) ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update user</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>