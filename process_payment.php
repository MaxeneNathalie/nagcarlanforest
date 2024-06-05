<?php
// Start the session
session_start();

// Include necessary files
require('admin/db_config.php');
require('admin/essentials.php');

// Check if booking data is set in the session
if(isset($_SESSION['booking_data'])) {
    // Retrieve booking data from session
    $name = $_SESSION['booking_data']['name'];
    $phone_number = $_SESSION['booking_data']['phone_number'];
    $address = $_SESSION['booking_data']['address'];
    $check_in = $_SESSION['booking_data']['check_in'];
    $check_out = $_SESSION['booking_data']['check_out'];
    $room_id = $_SESSION['booking_data']['room_id'];
    $payment = $_SESSION['room']['payment'];

    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'resortwebsite');

    // Check if the connection is successful
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare an SQL statement to insert the booking data
    $stmt = $conn->prepare("INSERT INTO bookings (name, phone_number, address, check_in, check_out, room_id, payment) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssssssd", $name, $phone_number, $address, $check_in, $check_out, $room_id, $payment);

        // Execute the SQL statement and check for errors
        try {
            if ($stmt->execute()) {
                echo "Booking created successfully!";
            } else {
                echo "Error: Unable to create booking. Please try again later.";
            }
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Error: Failed to prepare SQL statement!";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Error: Booking data not found in session!";
}
?>
