<?php
session_start();
include 'db_connect.php';

//bring back to login if there is no session
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: login.php');
    exit;
}

// Connect to the DB
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed." . mysqli_connect_error());
}

// Retrieve user input from session
$uName = $_SESSION['uName'];

// Prepare a statement to query the database
$stmt = $conn->prepare('SELECT * FROM users WHERE uName = ?');
$stmt->bind_param('s', $uName); // Bind the username parameter

// Execute the prepared statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Check if user exists
if ($user) {
    // Display the user's information
    $fName = $user['fname'];
    $mName = $user['mname'];
    $lName = $user['lname'];
    
} else {
    // No user found
    echo "Error retrieving user profile";
}

// Close the statement and connection
$stmt->close();
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Permit Page</title>
</head>
<body>
    <header class="header__main-container d-flex flex-column flex-sm-row container-fluid header">
        <!-- header logo -->
        <div class="header__logo-container container d-flex flex-column flex-sm-row p-3 pb-1">
            <div class="img__logo-container flex-shrink-0 mb-3 mb-sm-0 d-flex justify-content-center align-items-center">
                <img src="images/logo.png" class="img__logo" alt="">
            </div>
            <div class="head__txt-container flex-grow-1 ms-3 p-3">
                <p class="header__up-txt fs-6 text-white custom-line-height">
                    Republic of the Philippines
                </p>
                <p class="header__mid-txt fs-4 text-white custom-line-height">
                    DEPARTMENT OF ENVIRONMENT AND NATURAL RESOURCES
                </p>
                <hr class="text-white">
                <p class="header__bot-txt fs-6 text-white custom-line-height">
                    KAGAWARAN NG KAYAMANAN AT LIKAS NA YAMAN
                </p>
            </div>
        </div>
    </header>
    <nav class="header__nav-container container-fluid nav-bar p-2"> <!-- Main Nav -->
                <ul class="container d-flex flex-row gap-4 pt-2">
                        <li class="nav-item">
                            <a href="profilepage.php" class="nav__link text-white text-decoration-none">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav__link text-white text-decoration-none">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav__link text-white text-decoration-none">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="register.php"class="nav__link text-white text-decoration-none" >Register</a>
                        </li>
            </ul>
    </nav><br>
    <nav class="container sec__nav-container p-1" >
        <div class="row mt-3 gap-5 mx-1">
            <div class="col-1 mb-3">
                <a href="draft_pg.html" class="nav-link text-white mx-2">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/drafts.png" alt="draft" style="width: fit-content;">
                    <span>Draft</span>
                    </div>
                </a>
                </div>
                <div class="col-1 mb-3">
                <a href="#" class="nav-link text-white mx-2">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/notification.png" alt="notification" style="width: 2.5rem;">
                    <span>Notification</span>
                    </div>
                </a>
                </div>
                <div class="col-1 mb-3">
                <a href="#" class="nav-link text-white mx-2">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/profile.png" alt="profile" style="width: 2.5rem;opacity: 70%;">
                    <span>Profile</span>
                    </div>
                </a>
                </div>
                <div class="col-1 mb-3">
                <a href="permit_pg.html" class="nav-link text-white mx-2">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/permit.png" alt="permit" style="width: 2.5rem;" >
                    <span>Permit</span>
                    </div>
                </a>
            </div>
        </div>
    </nav><br>
    <main class="container profile__page-container d-flex justify-content-center align-items-center" style="background-color: #f8f8f8; border-radius: 10px; ">
        <div class="row  container-fluid p-2 pt-5 pb-5">
            <p class="h3" style="font-weight: bold;">User Profile</p>
            <hr>
            <div class="container-fluid bg-white col-md-4 p-5 " style="border-radius: 20px; height: 25rem;">
                <div class=" text-center container-fluid ">
                    <img src="images/logo.png" class="img__logo" alt="" style="width: 5rem;">
                    <?php echo "<p class='h3 p-3 pb-0' style='color: #009688; font-weight: 500;'> {$user['fname']} {$user['mname']} {$user['lname']} </p>";?>
                    <hr>
                        <button class="btn__edit-profile mt-3 mb-3" style="width: 100%;height: 3.5rem; border-radius: 10px; border: 2px solid #E3E3E3; color: #373737; font-weight: 500;"><img src="images/edit-profile.png"> Edit Profile</button>
                        <br>
                        <form action="logout.php" method="post">
                            <button class="btn__logout" type="submit" id="logout" name="logout" style="width: 100%;height: 3.5rem; border-radius: 10px; border: 2px solid #E3E3E3; color: #373737; font-weight: 500;">Logout</button>
                        </form>
                        
                </div>
            </div>
            <div class="col-md-7 bg-white container m-3 mt-0" style="border-radius: 20px;">
                <div class="p-5">
                    <p class="h3">Permit Status</p>
                    <hr>
                    <table class="table-bordered container-fluid border-success">
                        <tr>
                            <thead class="h5 text-center" style="color: #009688;">
                                <th class="p-3">Permit</th>
                                <th class="p-3">Status</th>
                            </thead>
                        </tr>
                        <tbody>
                            <tr>
                                <td class="p-2">HI</td>
                                <td class="p-2">HI</td>
                            </tr>
                            <tr>
                                <td class="p-2">HI</td>
                                <td class="p-2">HI</td>
                            </tr>
                            <tr>
                                <td class="p-2">HI</td>
                                <td class="p-2">HI</td>
                            </tr>
                            <tr>
                                <td class="p-2">HI</td>
                                <td class="p-2">HI</td>
                            </tr>
                        </tbody>
                    </table>
                        <button class="container-fluid p-2 mt-3 bg-transparent" style="border: 1px solid #009688; color: #009688; border-radius: 4px;">View All</button>
                        <form action="reg_chainsaw.php" method="post">
                            <button class="container-fluid p-2 mt-3 text-white" type="submit" style="background-color: #009688; border: none;border-radius: 4px;" >Apply for New Permit</button>
                        </form>
                        
                </div>
            </div>
            </div>
    </main>
</body>
</html>