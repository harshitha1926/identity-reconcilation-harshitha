<?php
// submit.php

$servername = "localhost";
$username = "root"; // Default username for XAMPP/WAMP
$password = "";     // Default password is empty for XAMPP/WAMP
$dbname = "contacts_db"; // Replace with your database name

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind parameters
$stmt = $conn->prepare("INSERT INTO contacts (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);

// Get the name and email from the POST request
$name = $_POST['name'];
$email = $_POST['email'];

// Execute the statement and provide feedback
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
