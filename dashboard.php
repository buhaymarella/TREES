<?php
session_start();
//bring back to login if there is no session
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: login.php');
    exit;
}
include 'db_connect.php';

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
    $uName = $user['uName'];
    
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
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dashboard Page</title>
</head>
<body>
    <nav class="header__nav-container container-fluid nav-bar p-2"> <!-- Main Nav -->
        <ul class="container d-flex flex-row gap-4 pt-2 justify-content-end">
            <li class="nav-item">
                <a href="dashboard.php" class="nav__link text-white text-decoration-none">Home</a>
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
    </nav>
    <!-- DASHBOARD -->
    <main class="container-fluid">
        <div class="row">
        <style>
            .border-bottom {
                border-bottom: 1px solid #dee2e6;
                border-radius: 0;
                margin-bottom: -1px;
            }
            #logout{
                border:none;
                text-align: center;
                width: 100%;
                color: var(--secondary-text);
                padding: 1rem;
                animation: ease-in-out 6ms;
            }
            #logout:hover{
                
                color: var(--primary-color);
                background-color: transparent;
                border: 1px solid var(--primary-color);
            }
            footer{
                position: sticky;
                top: 100%;
            }
        </style>

        <div class="col-sm-3 col-md-6 col-lg-4 col-xl-2">
            <p class="h2 mx-2 mt-5">Menu</p>
            <hr>
            <a class="nav-link" href="user_maintenance.php">User Maintenance</a>
            <hr>
            <a class="nav-link" href="admin-store-main.php">Chainsaw Store Maintenance</a>
            <hr>
            <a class="nav-link " href="#">Payment Maintenance</a>
            <hr>
            <a class="nav-link " href="#">Permit Maintenance</a>
            <hr>
            <a class="nav-link " href="app-maintenance">Application Maintenance</a>
            <hr>
            <a class="nav-link " href="#">Generate Reports</a>
            <hr><br><br>


            <footer class="footer">
                <form action="logout.php" method="post">
                    <button type="submit" id="logout" name="logout" class="border-none">Logout</button>
                </form>
                <hr>
                <div class="row">
                    <div class="col-sm-3 mt-3 ml-2">
                        <i class="fa-solid fa-user fa-xl" style="color: #252525;" style="width: 30px; margin: 1rem;"></i>
                    </div>
                    <div class="col-sm-6" style="margin-left:-1rem;">
                        <p class="h6">Logged in as:</p>
                        <?php echo "<p class='h5 bold'>{$user['uName']}</p>";?>
                    </div>
                </div>

            </footer>
        </div>

            <div class="col-md-8 bg-light col-sm-9 col-md-6 col-lg-8 col-xl-10">
                <div class="row">
                    <div class="col">
                        <p class="display-6 m-2">Dashboard</p>
                        <p class="h5 mx-2 text-secondary">Registered Users</p>
                    </div>
                    <div class="col mb-0 mt-4 m-5">
                        <select name="mode" id="mode" class="form-select flex-end" onclick="navigateToPage();">
                            <option value="" disabled selected>Choose One</option>
                            <option value="forestry.html">Forestry Registration</option>
                            <option value="permit_two.html" >Certificate of Verification</option>
                            <option value="permit_two.html">Plantation</option>
                        </select>
                    </div>
                </div>
                <div class="card__container pb-5">
                    <div>
                        <?php $num= 120; ?>
                        <p class="display-5 text-white mb-0 m-3 mt-4" style="font-weight: 500;"><?php echo $num;?></p>
                        <p class="text-white mt-2 m-3 mb-0" style="font-size: 16px; font-weight: 500;">Registered Users</p>
                        <p class="text-white mt-0 m-3" style="font-size: 12px;font-weight: 500;">some sub-text</p>
                        <i class="fa-solid fa-user fa-2xl" style="color: #ffffff; transform: translateY(-6.2rem) translateX(10rem);"></i>
                    </div>
                    <div>
                    <?php $num= 120; ?>
                        <p class="display-5 text-white mb-0 m-3 mt-4" style="font-weight: 500;"><?php echo $num;?></p>
                        <p class="text-white mt-0 m-3 mb-0" style="font-size: 16px; font-weight: 500;">Accredited Chainsaw Stores</p>
                        <p class="text-white mt-0 m-3" style="font-size: 12px;font-weight: 500;">some sub-text</p>
                        <i class="fa-regular fa-store fa-2xl" style="color: #ffffff; transform: translateY(-7.5rem) translateX(10rem);"></i>
                    </div>
                    <div>
                    <?php $num= 120; ?>
                        <p class="display-5 text-white mb-0 m-3 mt-4" style="font-weight: 500;"><?php echo $num;?></p>
                        <p class="text-white mt-2 m-3 mb-0" style="font-size: 16px; font-weight: 500;">Registered Chainsaws</p>
                        <p class="text-white mt-0 m-3" style="font-size: 12px;font-weight: 500;">some sub-text</p>
                        <i class="fa-solid fa-user fa-2xl" style="color: #ffffff; transform: translateY(-6.5rem) translateX(10rem);"></i>
                    </div>
                    <div>
                    <?php $num= 120; ?>
                        <p class="display-5 text-white mb-0 m-3 mt-4" style="font-weight: 500;"><?php echo $num;?></p>
                        <p class="text-white mt-2 m-3 mb-0" style="font-size: 16px; font-weight: 500;">Total Revenue</p>
                        <p class="text-white mt-0 m-3" style="font-size: 12px;font-weight: 500;">some sub-text</p>
                        <i class="fa-solid fa-user fa-2xl" style="color: #ffffff; transform: translateY(-6.2rem) translateX(10rem);"></i>
                    </div>
                </div>

            
            <section class="graph__container row container mx-2 px-5">
                <div class="big__container col-sm-7">
                    <header class="container__head row">
                        <div class="col-sm-9">
                            <p class="col text-white pt-2 h4">Registered Users</p>
                            <p class="col text-white h6">Compared to previous years</p>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <i class="far fa-print fa-lg col mx-2" style="color: #ffffff;"></i>
                            <i class="fa-regular fa-file-arrow-down fa-lg col" style="color: #ffffff;"></i>
                        </div>
                    </header>
                    <h1>
                        
                    </h1>
                </div>
                <div class="small__container col-sm-4 mx-2">
                    <header class="container__head row">
                        <div class="col">
                            <p class="col text-white">Registered Users</p>
                        </div>
                        <div class="col">
                            <p class="col">Registered Users</p>
                        </div>
                    </header>
                </div>
            </section>
            </div>
        </div>
    </main>
</body>
</html>