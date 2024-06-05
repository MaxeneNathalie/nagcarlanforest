<!-- MODAL- REGISTER -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="index.php" method="post"> 
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-ligh text-dark mb-3 text-wrap lh-base">
                        <div id="error-container">
                            <?php
                            // Display validation errors if there are any
                            foreach ($errors as $error) {
                                echo "<span style='color:red;'>$error</span><br>";
                            }
                            ?>
                        </div>
                    </span>
                    <div class="container-fluid">
                    <div class = "row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none" id="Name" name="Name" value="<?php echo isset($Name) ? $Name : ''; ?>" required>
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none" id="Email" name="Email" value="<?php echo isset($Email) ? $Email : ''; ?>" required>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none" id="PhoneNumber" name="PhoneNumber" value="<?php echo isset($PhoneNumber) ? $PhoneNumber : ''; ?>" required>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none" id="Password" name="Password" value="<?php echo isset($Password) ? $Password : ''; ?>" required>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none" id="CPassword" name="CPassword" value="<?php echo isset($CPassword) ? $CPassword : ''; ?>" required>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="text-center my-1">
                    <button type="submit" name="reg_user" class="btn-dark shadow-none">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
</div>