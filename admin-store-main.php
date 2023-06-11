<?php
include 'db_connect.php';

// Connect to the DB
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed." . mysqli_connect_error());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chainName = $_POST['chain-store'];
    $ownerName = $_POST['own-name'];
    $storeAddress = $_POST['store-address'];
    $contactNumber = $_POST['store-num'];
    $emailAddress = $_POST['store-email'];
    $bussPermit = $_FILES['bussPermit'];
    $storeMPermit = $_FILES['storeMPermit'];

    // Check if both images exist
    if ($bussPermit['error'] === 4 || $storeMPermit['error'] === 4) {
        echo "<script>alert('Image(s) do not exist!');</script>";
    } else {
        // Process business permit image
        $bussPermitFilename = $bussPermit['name'];
        $bussPermitTmpName = $bussPermit['tmp_name'];
        $bussPermitFilesize = $bussPermit['size'];

        $validImageExtensions = ['jpg', 'jpeg'];
        $bussPermitExtension = strtolower(pathinfo($bussPermitFilename, PATHINFO_EXTENSION));

        if (!in_array($bussPermitExtension, $validImageExtensions)) {
            echo "<script>alert('Invalid Business Permit Image!');</script>";
        } elseif ($bussPermitFilesize > 5000000) {
            echo "<script>alert('The Business Permit image must not exceed 5MB');</script>";
        } else {
            $bussPermitNewName = uniqid() . '.' . $bussPermitExtension;
            move_uploaded_file($bussPermitTmpName, 'img/' . $bussPermitNewName);
        }
    }

        // Process mayor's permit image
        $storeMPermitFilename = $storeMPermit['name'];
        $storeMPermitTmpName = $storeMPermit['tmp_name'];
        $storeMPermitFilesize = $storeMPermit['size'];

        $validImageExtensions = ['jpg', 'jpeg'];
        $storeMPermitExtension = strtolower(pathinfo($storeMPermitFilename, PATHINFO_EXTENSION));

        if (!in_array($storeMPermitExtension, $validImageExtensions)) {
            echo "<script>alert('Invalid Mayor\'s Permit Image!');</script>";
        } elseif ($storeMPermitFilesize > 5000000) {
            echo "<script>alert('The Mayor\'s Permit image must not exceed 5MB');</script>";
        } else {
            $storeMPermitNewName = uniqid() . '.' . $storeMPermitExtension;
            move_uploaded_file($storeMPermitTmpName, 'img/' . $storeMPermitNewName);
        }


        // Process mayor's permit image
        $storeMPermitFilename = $storeMPermit['name'];
        $storeMPermitTmpName = $storeMPermit['tmp_name'];
        $storeMPermitFilesize = $storeMPermit['size'];

        $validImageExtensions = ['jpg', 'jpeg'];
        $storeMPermitExtension = strtolower(pathinfo($storeMPermitFilename, PATHINFO_EXTENSION));

        if (!in_array($storeMPermitExtension, $validImageExtensions)) {
            echo "<script>alert('Invalid Mayor\'s Permit Image!');</script>";
        } elseif ($storeMPermitFilesize > 5000000) {
            echo "<script>alert('The Mayor\'s Permit image must not exceed 5MB');</script>";
        } else {
            $storeMPermitNewName = uniqid() . '.' . $storeMPermitExtension;
            move_uploaded_file($storeMPermitTmpName, 'img/' . $storeMPermitNewName);
        }

        // Prepare and bind the statement
        $stmt = $conn->prepare("INSERT INTO chainsaw_store (storeName, storeOwner, storeAddress, storeNum, storeEmail, bussPermit, storeMPermit) VALUES (?, ?, ?, ?, ?, ?, ?)");


        if ($stmt === false) {
            // Error in preparing the statement
            echo "Error: " . $conn->error;
            exit;
        }

        $stmt->bind_param("sssssss", $chainName, $ownerName, $storeAddress, $contactNumber, $emailAddress, $bussPermitNewName, $storeMPermitNewName);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Data inserted successfully
            echo "<script>alert('Data inserted successfully');</script>";
        } else {
            // Error in data insertion
            echo "<script>alert('Error in data insertion');</script>";
        }
        
        // Close the prepared statement
        $stmt->close();
        
        // Close the database connection
        $conn->close();
        
    }
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
                <a href="register.php" class="nav__link text-white text-decoration-none">Register</a>
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
                <a href="user_maintenance.php">User Maintenance</a>
                <hr>
                <a href="admin-store-main.php" style="color: var(--primary-color);">Chainsaw Store Maintenance</a>
                <hr>
                <a href="#">Permit Maintenance</a>
                <hr>
                <a  href="app-maintenance.php">Application Maintenance</a>
                <hr>
                <a  href="dashboard.php">Generate Reports</a>
                <hr><br><br>


                <footer class="footer d-block align-items-end justify-content-end">
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
                            <p class="h5 bold">ADMIN</p>
                        </div>
                    </div>
                </footer>
            </div>

            <div class="col-md-8 bg-light col-sm-9 col-md-6 col-lg-8 col-xl-10">
                <div class="row">
                    <div class="col">
                        <p class="display-6 m-2">Dashboard</p>
                        <p class="h5 mx-2 text-secondary">Registered Stores</p>
                    </div>
                </div>
                <section class="graph__container container mx-2 px-5">
                    <div class="mx-2 p-4 pt-0 row">
                        <table class="table table-triped-columns table-bordered border-success text-center col-sm-8">
                            <thead> 
                                <tr>
                                    <div class="container sec__nav-container p-1 pt-0 pb-4" style="background-color: var(--primary-color); margin-bottom: -3%;">
                                        <div class="row mt-3 mx-4">
                                            <h2 class="h2 text-white col-sm-4 mt-4 mb-0 pb-4">Chainsaw Store List</h2>
                                        </div>
                                    </div>
                                </tr>
                                <tr style="background-color: #B2DFDB">
                                    <th scope="col" class="p-3">Store Name</th>
                                    <th scope="col" class="p-3">Owner's Name</th>
                                    <th scope="col" class="p-3 text-center">Address</th>
                                    <th scope="col" class="p-3 text-center">Contact No.</th>
                                    <th scope="col" class="p-3 text-center">Email Address</th>
                                    <th scope="col" class="p-3 text-center">Business Permit</th>
                                    <th scope="col" class="p-3 text-center">Mayor's Permit</th>
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
                                // Query to check if the specified table has data
                                $query = "SELECT * FROM chainsaw_store ORDER BY `store-regDate` DESC";
                                $result = mysqli_query($conn, $query);

                                // Check for errors in query execution
                                if (!$result) {
                                    die("Error executing query: " . mysqli_error($conn));
                                }
                            
                                // Fetch the count value
                                $count = mysqli_fetch_array($result)[0];

                                // If the table has data, add the <tr> element
                                if ($count > 0) {
                                    $query = "SELECT * FROM chainsaw_store";
                                    $result = mysqli_query($conn, $query);
                                
                                    // Fetch the rows from the result set
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<tr>
                                            <td>' . $row["storeName"] . '</td>
                                            <td>' . $row["storeOwner"] . '</td>
                                            <td>' . $row["storeAddress"] . '</td>
                                            <td>' . $row["storeNum"] . '</td>
                                            <td>' . $row["storeEmail"] . '</td>
                                            <td><img src="data:image/jpeg;base64,' . base64_encode($row["bussPermit"]) . '" width="100"></td>
                                            <td><img src="data:image/jpeg;base64,' . base64_encode($row["storeMPermit"]) . '" width="100"></td>
                                            <td colspan="2" class="text-center">
                                                <button class="btn btn-success col" id="btn-edit">Edit</button>
                                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                                            </td>
                                        </tr>';
                                    }

                                }
                                mysqli_free_result($result);

                                // Close the connection
                                mysqli_close($conn);
                            ?>
                            </tbody>
                        </table>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post" class="d-flex justify-content-center align-items-center row mt-3 p-5  pt-0 bg-white">
                            <p class="h5 text-center mt-5">Add Chainsaw Store</p>
                            <p class="h5 text-start mt-2">Store's Information</p>
                            <hr>
                            <div class="mb-3">
                                <input type="text" placeholder="Store Name" class="form-control" name="chain-store">
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Owner's Complete Name" class="form-control" name="own-name">
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Store's Full Address" class="form-control" name="store-address">
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Store's Contact Number" class="form-control" name="store-num">
                            </div>
                            <div class="mb-3">
                                <input type="email" placeholder="Store's Email Address" class="form-control" name="store-email">
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="bussPermit" id="bussPermit" accept=".jpg, .jpeg, .png">
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="storeMPermit" id="storeMPermit" accept=".jpg, .jpeg, .png">
                            </div>
                            <div class="mb-3 d-flex justify-content-center align-items-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>
</html>