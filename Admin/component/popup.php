<div class="button-add-user">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add user</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="adduser.php" enctype="multipart/form-data">
                        
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Username:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="username" required>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="recipient-name" name="email" required>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Password:</label>
                                    <input type="tpassword" class="form-control" id="recipient-name" name="password" required>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Phone number:</label>
                                    <input type="number" class="form-control" id="recipient-name" name="phone_number" required>
                                  </div>
                                  
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to add this user?')">Add user</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>