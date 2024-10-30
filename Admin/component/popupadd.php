<div class="button-add-booking">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add booking</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add booking</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="addbooking.php" enctype="multipart/form-data">
                                <div class="">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="recipient-name" name="email" required>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Date:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="date" required>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Start time:</label>
                                    <input type="time" class="form-control" id="recipient-name" name="start_time" required>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">End time:</label>
                                       <input type="time" class="form-control" id="recipient-name" name="end_time"required>
                                     </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Court:</label>
                                    <select id="court" name="court" required>
                    <option>Select One</option>
                <?php
                    include "config.php";
                    $result =mysqli_query($conn, "SELECT * FROM futsals");
                    while($futsal = mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $futsal['ID']; ?>">
                        <?php echo $futsal['Name'] ?>    
                    </option>
                    <?php 
                  }?>
            
                </select>
                    
                </div>                 
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to add this futsal?')">Add booking</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>