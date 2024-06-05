<?php

$Name = $_POST['name'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];



$conn = new mysqli('localhost', 'root', '', 'resortwebsite');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO user_queries (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Name, $Email, $Subject, $Message);
    $execval = $stmt->execute();
    if ($execval) {
        // cookies for the registered user
        setcookie("username", $Name, time() + (86400 * 30), "/"); // Cookie expires in 30 days
        setcookie("email", $Email, time() + (86400 * 30), "/"); // Cookie expires in 30 days

        echo "<p>Cookies set:</p>";
        echo "<p>Username: $Name</p>";
        echo "<p>Email: $Email</p>";
          
        echo "<script>alert('Message Sent!'); window.location.href = 'contactUs.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}












?>