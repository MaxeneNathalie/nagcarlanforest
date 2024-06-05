 <!-- MODAL- LOGIN -->
 
<?php


$errors = array();

if (isset($_POST['reg_user'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Password = $_POST['Password'];
    $CPassword = $_POST['CPassword'];

    // Add validation for Name, Email, Password, and Password match
    if (empty($Name)) {
        $errors['name'] = "Name is Required!";
    }
    if (empty($Email)) {
        $errors['email'] = "Email is Required!";
    }
    if (empty($Password)) {
        $errors['password'] = "Password is Required!";
    }
    if (empty($CPassword)) {
        $errors['cpassword'] = "Confirm Password is Required!";
    }
    if ($Password != $CPassword) {
        $errors['match'] = "Passwords do not Match!";
    }
    // Add more password validation rules as needed, like minimum length, etc.

    // Check if there are any validation errors
    if (count($errors) == 0) {
        // Hash the password
        $encrypted_password = password_hash($Password, PASSWORD_DEFAULT);

        // Establish database connection
        $conn = new mysqli('localhost', 'root', '', 'resortwebsite');
        if ($conn->connect_error) {
            echo "$conn->connect_error";
            die("Connection Failed : " . $conn->connect_error);
        } else {
            // Check if the email already exists
            $query_check_email = "SELECT * FROM login WHERE Email=?";
            $stmt_check_email = $conn->prepare($query_check_email);
            $stmt_check_email->bind_param("s", $Email);
            $stmt_check_email->execute();
            $result_check_email = $stmt_check_email->get_result();

            if ($result_check_email->num_rows > 0) {
                echo "<script>alert('Email already exists!'); window.location.href = 'index.php';</script>";
            } else {
                // Proceed with registration
                $stmt = $conn->prepare("INSERT INTO login (Name, Email, PhoneNumber, Password) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssis", $Name, $Email, $PhoneNumber, $encrypted_password);
                $execval = $stmt->execute();
                if ($execval) {
                    // Set cookies for the registered user
                    setcookie("username", $Name, time() + (86400 * 30), "/"); // Cookie expires in 30 days
                    setcookie("email", $Email, time() + (86400 * 30), "/"); // Cookie expires in 30 days

                    echo "<script>alert('Registration Complete!');</script>";
                } else {
                    echo "Error: " . $stmt->error;
                }
                
                $stmt->close();
            }
            $stmt_check_email->close();
            $conn->close();
        }
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    // Get username and password from the form
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    // Establish database connection
    $db = new mysqli('localhost', 'root', '', 'resortwebsite');

    // Validate form fields
    if (empty($Email)) {
        echo "<script>alert('Error: Email is required');</script>";
    }
    if (empty($Password)) {
        echo "<script>alert('Error: Password is required');</script>";
    }

    // If there are no errors, proceed with login
    if (count($errors) == 0) {
        // Query the database to check if username exists
        $stmt = $db->prepare("SELECT * FROM login WHERE Email=?");
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($Password, $user['Password'])) {
                // Password is correct, start session and redirect to home page
                echo "<script>alert('You are now Logged in " . $user['Name'] . "');</script>";              
                $_SESSION['email'] = $Email;
                $_SESSION['name'] = $user['Name'];
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
                exit;
            } else {
                // Incorrect password
                echo "<script>alert('Error: Incorrect password');</script>";
            }
        } else {
            // User not found
            echo "<script>alert('Error: Username not found');</script>";
        }
    }
}

?>


<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <!-- Check if session variable is set and display welcome message -->
                     <?php
                    if (isset($_SESSION['Name'])) {
                        echo "<div>Welcome " . $_SESSION['Name'] . "! You're now logged in.</div>";
                        unset($_SESSION['Name']); // Clear the session variable
                    }
                    ?>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none" name="email" id="loginEmail" required> <!-- Added id for easy identification -->
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none" required name="password" id="loginPassword"> <!-- Added id for easy identification -->
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" name="login_user" class="btn-dark shadow-none">LOGIN</button> <!-- Changed type to button and added onclick event -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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

