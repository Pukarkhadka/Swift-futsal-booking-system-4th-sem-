<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users — Swift Kick</title>
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
                    <span class="page-kicker">Squad department</span>
                    <div class="title">Users</div>
                </div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <?php include 'component/popup.php'; ?>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table users table-borderless">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php';
                        $result = $conn->query("SELECT * FROM user");
                        foreach ($result as $value):
                        ?>
                            <tr>
                                <td><span class="badge-chip">#<?php echo $value['id'] ?></span></td>
                                <td><strong><?php echo htmlspecialchars($value['username']) ?></strong></td>
                                <td><?php echo htmlspecialchars($value['email']) ?></td>
                                <td><?php echo htmlspecialchars($value['phone_number']) ?></td>
                                <td>
                                    <div class="btn-group-user">
                                        <a href="modifier.php?id=<?= $value['id'] ?>"><i class="far fa-pen me-1"></i>Edit</a>
                                        <a class="danger-link" href="removeuser.php?id=<?= $value['id'] ?>"
                                            onclick="return confirm('Are you sure you want to delete this user?');"><i class="far fa-trash-alt me-1"></i>Delete</a>
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