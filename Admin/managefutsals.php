<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Futsal</title>
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
                <div class="title h6 fw-bold">Futsals</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <!-- <i class="far fa-sort"></i> -->
                    </div>
                    <div class="button-add-booking">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add futsal</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Futsal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="addfutsal.php" enctype="multipart/form-data">
                                            <div class="">
                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="name">
                                            </div>
                                            <div class="">
                                                <label for="recipient-name" class="col-form-label">Photo:</label>
                                                <input type="file" class="form-control" id="recipient-name" name="photo" single>
                                            </div>
                
                                            <div class="">
                                        <label for="recipient-description" class="col-form-label">Description</label>
                                                <textarea class="form-control" id="recipient-description"
                                                    name="description"></textarea>
                                            </div>
                                            <div class="">
                                                <label for="recipient-name" class="col-form-label">Price</label>
                                                <input type="number" class="form-control" id="recipient-name"
                                                    name="price">
                                            </div>
                                        
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" class="btn btn-primary">Add
                                                    futsal</button>
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
                        <tr class="align-middle">
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php';
                        $result = $conn->query("SELECT * FROM futsals");
                        foreach ($result as $value):
                            ?>

                            <td><?php echo $value['ID'] ?></td>
                            <td><img src="<?php echo $value['Photo'] ?>" height="30"></td>
                            <td><?php echo $value['Name'] ?></td>
                            <td><?php echo $value['Description'] ?></td>
                            <td><?php echo $value['Price'] ?></td>
                       
                            <td class="d-md-flex gap-4 mt-3">
                                <!-- <a href="modifierbooking.php?id=<?php echo $value['ID'] ?>"><i class="far fa-pen"></i></a> -->
                                <a href="removefutsal.php?id=<?php echo $value['ID'] ?>"onclick="return confirm('Are you sure you want to delete this futsal?');">Delete</a>
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