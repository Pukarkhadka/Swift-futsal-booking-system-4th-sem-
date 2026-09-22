<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Futsals — Swift Kick</title>
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
                    <span class="page-kicker">The grounds</span>
                    <div class="title">Futsals</div>
                </div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="button-add-booking">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-plus me-2"></i>Add futsal</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Futsal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="addfutsal.php" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name:</label>
                                                <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="photo" class="form-label">Photo:</label>
                                                <input type="file" class="form-control" id="photo" name="photo" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="number" class="form-control" id="price" name="price" required>
                                            </div>
                                            <div class="modal-footer px-0 pb-0">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" class="btn btn-primary">Add futsal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table users table-borderless">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php';
                        $result = $conn->query("SELECT * FROM futsals");
                        foreach ($result as $value):
                        ?>
                            <tr>
                                <td><span class="badge-chip">#<?php echo $value['ID'] ?></span></td>
                                <td><img class="thumb" src="<?php echo htmlspecialchars($value['Photo']) ?>" alt="<?php echo htmlspecialchars($value['Name']) ?>"></td>
                                <td><strong><?php echo htmlspecialchars($value['Name']) ?></strong></td>
                                <td><?php echo htmlspecialchars($value['Description']) ?></td>
                                <td><span class="badge-chip">&#8377;<?php echo htmlspecialchars($value['Price']) ?></span></td>
                                <td>
                                    <div class="btn-group-user">
                                        <a class="danger-link" href="removefutsal.php?id=<?php echo $value['ID'] ?>"
                                            onclick="return confirm('Are you sure you want to delete this futsal?');"><i class="far fa-trash-alt me-1"></i>Delete</a>
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