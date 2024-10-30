<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User</title>
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
                <div class="title h6 fw-bold">Users</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <!-- <i class="far fa-sort"></i> -->
                    </div>
                    <?php include 'component/popup.php'; ?>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table users table-borderless">
                    <thead>
                    <tr class="align-middle">
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone Number</th>
                            <th>Delete/Edit</th>
                    </thead>
                    <tbody>
                        <?php
                          include 'config.php';
                          $result = $conn -> query("SELECT * FROM user");
                          foreach($result as $value):
                        ?>
                    
                      <td><?php echo $value['id'] ?></td>
                                <td><?php echo $value['username'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td><?php echo $value['password'] ?></td>
                                <td><?php echo $value['phone_number'] ?></td>
                                <td class="d-md-flex gap-2 mt-3">
                                  <a href="removeuser.php?id=<?= $value['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>/
                                  <a href="modifier.php?id=<?= $value['id'] ?>">Edit</a>
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
