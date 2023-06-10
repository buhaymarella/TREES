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
            a{
                text-decoration: none;
                color: var(--primary-text);
            }
            a:hover{
                color: var(--primary-color);
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
            .hidden {
            display: none;
            }

            .fade-in {
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }

            .visible {
                opacity: 1;
        }
        </style>

        <div class="col-sm-3 col-md-6 col-lg-4 col-xl-2">
            <p class="h2 mx-2 mt-5">Menu</p>
            <hr>
            <a href="user_maintenance.php" style="color: var(--primary-color);">User Maintenance</a>
            <hr>
            <a href="admin-store-main.php">Chainsaw Store Maintenance</a>
            <hr>
            <a  href="#">Payment Maintenance</a>
            <hr>
            <a  href="#">Permit Maintenance</a>
            <hr>
            <a  href="app-maintenance.php">Application Maintenance</a>
            <hr>
            <a  href="#">Generate Reports</a>
            <hr><br><br>


            <footer class="footer" style="position: sticky; top: 100%;">
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
                </div>

            
                <section class="graph__container container mx-2 px-5">
                    <div class="mx-2 p-4 pt-0 row">
                        <table class="table table-triped-columns table-bordered border-success text-center col-sm-8">
                            <thead> 
                                <tr>
                                    <div class="container sec__nav-container p-1 pt-0 pb-4" style="background-color: var(--primary-color); margin-bottom: -3%;">
                                        <div class="row mt-3 mx-4">
                                            <h2 class="h2 text-white col-sm-4 mt-4 mb-0 pb-4">User List</h2>
                                        </div>
                                    </div>
                                </tr>
                                <tr style="background-color: #B2DFDB; color: var(--primary-color);">
                                    <th scope="col" class="p-3">Name</th>
                                    <th scope="col" class="p-3">Type of User</th>
                                    <th scope="col" class="p-3 text-center">Status</th>
                                    <th scope="col" class="p-3 text-center">Registered Date</th>
                                    <th scope="col" class="p-3 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include 'db_connect.php';
                                // Connect to the DB
                                $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

                                // Check the connection
                                if (!$conn) {
                                    die("Connection failed." . mysqli_connect_error());
                                }
                                // ...

                                // Query to check if the specified table has data
                                $query = "SELECT COUNT(*) FROM users";
                                $result = mysqli_query($conn, $query);

                                // Check for errors in query execution
                                if (!$result) {
                                    die("Error executing query: " . mysqli_error($conn));
                                }

                                // Fetch the count value
                                $count = mysqli_fetch_array($result)[0];

                                // If the table has data, add the <tr> element
                                if ($count > 0) {
                                    $query = "SELECT * FROM users";
                                    $result = mysqli_query($conn, $query);
                                
                                    // Check for errors in query execution
                                    if (!$result) {
                                        die("Error executing query: " . mysqli_error($conn));
                                    }
                                
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '
                                            <tr>
                                                <td>' . $row["fname"] . "&nbsp" .$row["mname"]. "&nbsp" . $row["lname"].'</td>
                                                <td>' . $row["type_User"] . '</td>
                                                <td>' . $row["status"] . '</td>
                                                <td>' . $row["regDate"] . '</td>
                                                <td colspan="2" class="text-center">
                                                    <button class="btn btn-success col m-2"><a href="approve_user.php?id=' . $row["id"] . '" class="text-decoration-none text-white">Approve User</a></button><br>
                                                    <button class="btn btn-outline-success col" id="btn-edit">View</button>
                                                    <button class="btn btn-danger col" id="btn-del">Return</button>
                                                </td>
                                            </tr>';
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                        <button class="btn btn-success mt-3 p-2" onclick="toggleForm();">+Add User</button>

                        <!-- User Register -->
                        <form action="user-register.php" method="post" class="row g-3 p-5 pt-0 hidden fade-in" id="myForm">
                            <hr>
                            <p class="head-text">Type of User:</p>
                            <div class="col-md-6">
                                <select name="type_User" id="type_User" class="form-select">
                                <?php
                                    // Connect to the database
                                    include 'db_connect.php';
                                    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

                                    // Check the connection
                                    if (!$conn) {
                                        die("Connection failed." . mysqli_connect_error());
                                    }
                                
                                    // Query to fetch the options from the table
                                    $query = "SELECT option_value FROM users";
                                    $result = mysqli_query($conn, $query);
                                
                                    // Loop through the query result and generate <option> tags
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $optionValue = $row['option_value'];
                                        echo "<option value='$optionValue'>$optionValue</option>";
                                    }
                                
                                    // Close the database connection
                                    mysqli_close($conn);
                                ?>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <p class="head-text">Personal Details:</p>
                            <div class="col-md-6">
                                <input type="text" placeholder="First Name" required id="fName" name="fName" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Last Name" required id="lName" name="lName" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Middle Name" id="mName" name="mName" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Suffix" id="suff" name="suff" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Baranggay" required id="brgy" name="brgy" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Municipality" required id="mncpl" name="mncpl" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="City/Province" required id="cprov" name="cprov" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Postal ID" required id="pId" name="pId" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <?php date_default_timezone_set('Asia/Manila');?>
                                <input type="text" placeholder="Date of Birth" required id="datepicker" name="dBirth" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="number" placeholder="Age" required id="age" name="age" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Occupation" id="occ" name="occ" class="form-control">
                            </div>
                            <hr>
                            <p class="head-text">Contact/Account Information</p>
                            <div class="col-md-6">
                                <input type="number" placeholder="Telephone Number" required id="tNum" name="tNum" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" required id="email" name="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Confirm Email" required id="cEmail" name="cEmail" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Username" required id="uName" name="uName" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="password" placeholder="Password" required id="Gpass" name="Gpass" class="form-control">
                            </div>
                            <div class="col-12 p-3 mb-2 text-white d-grid gap-3">
                                <button type="submit" value="Register" name="submit" class="btn btn-primary btn-block btn__reg" id="btn-sub">
                                    Register
                                </button>
                            </div>
                            <hr>
                        </form>
            </section>
            </div>
        </div>
    </main>
    <script>
        function toggleForm() {
    var form = document.getElementById("myForm");
    form.classList.toggle("hidden");
    form.classList.toggle("fade-in");
    form.classList.toggle("visible");
}
    </script>
</body>
</html>
