<?php
session_start();
include 'db_connect.php';

// Connect to the DB
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the form
    $uName = $_POST['uName'];
    $pass = $_POST['pass'];
    $typeUser = isset($_POST['type_User']) ? $_POST['type_User'] : '';

    // Prepare a statement to query the database
    $stmt = $conn->prepare('SELECT * FROM users WHERE uName = ?');
    $stmt->bind_param('s', $uName); // Bind the username parameter

    // Execute the prepared statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Close the statement
    $stmt->close();

    // Check if user exists and credentials are valid
    if ($user && md5($pass) === $user['pass']) {
        $_SESSION['login'] = true;
        $_SESSION['uName'] = $uName;

        // Check the user type and redirect accordingly
        if ($typeUser == 'admin' && $user['type_User'] == 'admin') {
            header('Location: dashboard.php');
            exit;
        } elseif ($typeUser == 'user' && $user['type_User'] == 'user') {
            header('Location: profilepage.php');
            exit;
        } else {
			echo "<script>alert('Invalid User Type'); window.location.href=login.php;</script>";

        }
    } else {
        echo "<script>alert('Invalid Username or Password'); window.location.href=login.php;</script>";
    }
}

// Close the connection
mysqli_close($conn);
?>
