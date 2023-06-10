<?php
// approve_user.php

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Connect to the database
    include 'db_connect.php';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Update the 'approved' column in the 'users' table
        $sql = "UPDATE users SET status = 'approved' WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$userId]);

        
        echo "User approved successfully";
        // Redirect to the appropriate page
        header("Location: user_maintenance.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
} else {
    echo "Invalid request";
}
?>
