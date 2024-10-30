<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
            include 'config.php';
            $nbr_user = $conn->query("SELECT * FROM user");
            $nbr_user = mysqli_num_rows($nbr_user);

            $nbr_bookings = $conn->query("SELECT * FROM bookings");
            $nbr_bookings = mysqli_num_rows($nbr_bookings);

            $nbr_futsals = $conn->query("SELECT * FROM futsals");
            $nbr_futsals = mysqli_num_rows($nbr_futsals);
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px">
     
            <div class="cards row gap-3 justify-content-center mt-5">
                <div class=" card__items card__items--blue col-md-3 position-relative">
                    <div class="card__students d-flex flex-column gap-2 mt-5">
                        <span>Users</span>
                    </div>
                    <div class="card__nbr-users">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_user; ?></span>
                     </div>
                </div>
                <div class=" card__items card__items--rose col-md-3 position-relative">
                    <div class="card__Bookings d-flex flex-column gap-2 mt-5">
                
                        <span>Bookings</span>
                    </div>
                    <div class="card__nbr-students">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_bookings; ?></span>
                     </div>
                </div>
                <div class="card__items card__items--gradient col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-5">
                        <!-- <i class="fal fa-user h3"></i> -->
                        <span>Futsals</span>
                    </div>
                    <div class="card__nbr-students">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_futsals; ?></span>
                     </div>
                </div>

                </div>
                    <span class="h5 fw-bold nbr">3</span>
            </div>

        </div>
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>