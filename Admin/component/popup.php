<div class="button-add-user">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-plus me-2"></i>Add user</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="adduser.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="user-username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="user-username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="user-email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="user-email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="user-password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="user-password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="user-phone" class="form-label">Phone number:</label>
                            <input type="number" class="form-control" id="user-phone" name="phone_number" required>
                        </div>
                        <div class="modal-footer px-0 pb-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to add this user?')">Add user</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>