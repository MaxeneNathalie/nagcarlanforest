<?php

// Get form data
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Password = $_POST['Password'];
$CPassword = $_POST['CPassword'];
$errors = array();



// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'resortwebsite');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} 

else {
    
        $stmt = $conn->prepare("INSERT INTO login(Name, Email, PhoneNumber, Password, CPassword) VALUES(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $Name, $Email, $PhoneNumber, $Password, CPassword);
        $execval = $stmt->execute();
        if ($execval) {
            // cookies for the registered user
            setcookie("username", $Name, time() + (86400 * 30), "/"); // Cookie expires in 30 days
            setcookie("email", $Email, time() + (86400 * 30), "/"); // Cookie expires in 30 days

            echo "<p>Cookies set:</p>";
            echo "<p>Username: $Name</p>";
            echo "<p>Email: $Email</p>";
          
            echo "<script>alert('Registration Complete!'); window.location.href = 'index.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    
    $stmt->close();
    $conn->close();
}


if (isset($_POST['login_user'])) {
    // Get username and password from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Validate form fields
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // If there are no errors, proceed with login
    if (count($errors) == 0) {
        // Hash the password before comparing with the database
        $password = md5($password);

        // Query the database to check if username and password match
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) == 1) {
            // User found, start session and redirect to home page
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            // User not found, add error message
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>
