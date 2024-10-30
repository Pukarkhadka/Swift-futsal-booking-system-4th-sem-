<?php  session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed">
            <div class="log d-flex justify-content-between">
                <h1 class="E-classe text-start ms-3 ps-1 mt-4 h6 fw-bold">Swift-Kick</h1>
                <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
            </div>
            
                <!-- <h2 class="h6 fw-bold"><?php echo $_SESSION['username']; ?></h2>
                <span class="h7 admin-color">admin</span>
            </div> -->
            <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4 ">
                <ul class="d-flex flex-column list-unstyled">
                        <li class="h7"><a class="nav-link text-dark" href="dashboard.php">
                        <i
                            class="fal fa-home-lg-alt me-2"></i> <span>Home</span></a></li>

                    <li class="h7"><a class=" nav-link text-dark" href="Manageuser.php"><i
                                class="far fa-user me-2"></i> <span>Users</span></a></li>
                                <li class="h7"><a class=" nav-link text-dark" href="managefutsals.php"><i
                                class="far fa-user me-2"></i> <span>Futsals</span></a></li>
                                <li class="h7"><a class=" nav-link text-dark" href="managebooking.php"><i
                                class="far fa-user me-2"></i> <span>Bookings</span></a></li>
                                
                    <!-- <li class="h7"><a class=" nav-link text-dark" href="payment_details.php"><i
                                class="fal fa-usd-square me-2"></i> <span>Payment</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href=""><i
                                class="fal fa-file-chart-line me-2"></i> <span>Report</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href=""><i
                                class="fal fa-sliders-v-square me-2"></i> <span>Settings</span></a></li>
                </ul> -->
                <ul class="logout d-flex justify-content-start list-unstyled">
                    <li class=" h7"><a class="nav-link text-dark" href="logout.php"><span>Logout</span><i
                                class="fal fa-sign-out-alt ms-2"></i></a></li>
                </ul>
            </div>

        </div>
