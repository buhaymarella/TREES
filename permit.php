<?php
    // Assuming you have already established a database connection
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
    // Get the user's ID from your authentication system
    $uName = $_SESSION['uName'];

    //get ID
    $getID = "select * from users where uName = '$uName'";
    $res = mysqli_query($conn, $getID);
    if(mysqli_num_rows($res) > 0){

        foreach($res as $row){
            $last_id = $row['id'];
        }
        
    } // Modify this according to your authentication setup
    
    // Retrieve data from the tables based on the foreign key relationship
    $query = "SELECT chainsaw_registration.permit_type AS chainsaw_permit_type,
                    ptpr_registration.permit_type AS ptpr_permit_type
                    FROM users
                    LEFT JOIN chainsaw_registration ON chainsaw_registration.chainsaw_id_fk = users.id
                    LEFT JOIN ptpr_registration ON ptpr_registration.ptpr_id = users.id
                    WHERE users.id = '$last_id'";
    
    $result = mysqli_query($conn, $query);
    
    // Check if the query executed successfully
    if ($result) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result);
    
        // Check if both permit types exist
        if ($row['chainsaw_permit_type'] !== null && $row['ptpr_permit_type'] !== null) {
            $permitType = "Both chainsaw_registration and ptpr_registration";
        } elseif ($row['chainsaw_permit_type'] !== null) {
            $permitType = "chainsaw_registration";
        } elseif ($row['ptpr_permit_type'] !== null) {
            $permitType = "ptpr_registration";
        } else {
            $permitType = "No permit type";
        }
    
        // Free the result set
        mysqli_free_result($result);
    } else {
        // Handle any errors that occurred during the query
        echo "Error: " . mysqli_error($conn);
    }
    
    // Close the database connection
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
                            <a href="index.html" class="nav__link text-white text-decoration-none">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav__link text-white text-decoration-none">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.html" class="nav__link text-white text-decoration-none">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="signup.html"class="nav__link text-white text-decoration-none" >Register</a>
                        </li>
            </ul>
    </nav><br>
    <nav class="container sec__nav-container p-1" >
        <div class="row mt-3 gap-5 mx-2">
            <div class="col-1 mb-3">
                <a href="draft.php" class="nav-link text-white mx-2">
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
                <a href="profilepage.php" class="nav-link text-white mx-2">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/profile.png" alt="profile" style="width: 2.5rem;">
                    <span>Profile</span>
                    </div>
                </a>
                </div>
                <div class="col-1 mb-3">
                <a href="permit.php" class="nav-link text-white mx-2" style="opacity: 70%;">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/permit.png" alt="permit" style="width: 2.5rem;" >
                    <span>Permit</span>
                    </div>
                </a>
            </div>
        </div>
    </nav><br>
        <div class="container section-body pb-0 pt-1">
            <div class="section-container mb-lg-5" >
                <table class="table table-triped-columns table-bordered border-success text-center">
                    <thead> 
                        <tr>
                            <div class="container sec__nav-container p-1 pt-0 pb-5" style="background-color: var(--primary-color); margin-bottom: -3%;">
                                <div class="row mt-3 mx-4">
                                    <img src="images/permit.png" alt="" class="col-sm-1 mx-1 mt-3 mb-0 rounded float-start" style="width: 5rem; " >
                                    <h2 class="h2 text-white col-sm-4 mt-4 mb-0">Permit</h2>
                                    <p class="text-white mt-0 mb-0 pt-0 pb-2 mx-2">Apply Application Request</p>
                                </div>
                            </div>
                        </tr>
                        <tr style="background-color: #B2DFDB">
                            <th scope="col" class="p-3">Type of Application</th>
                            <th scope="col" class="p-3 text-center">Date Issued</th>
                            <th scope="col" class="p-3 text-center">Status</th>
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
                        // Query chainsaw_registration table
                        $chainsawQuery = "SELECT permit_type, permit_date FROM chainsaw_registration WHERE chainsaw_id_fk = $last_id";
                        $chainsawResult = mysqli_query($conn, $chainsawQuery);
                        if (!$chainsawResult) {
                            die("Error retrieving chainsaw registration data: " . mysqli_error($conn));
                        }

                        while ($chainsawRow = mysqli_fetch_assoc($chainsawResult)) {
                            $permitType = $chainsawRow['permit_type'];
                            $dateIssued = $chainsawRow['permit_date'];
                            ?>

                            <tr>
                                <td><?php echo $permitType; ?></td>
                                <td><?php echo $dateIssued; ?></td>
                                <td class="text">Status</td>
                                <td class="text-center">
                                    <button class="btn btn-success" id="btn-edit">Edit</button>
                                    <form action="cert_reg-chainsaw.php" method="post">
                                        <button class="btn btn-outline-success">Print</button>
                                    </form>
                                </td>
                            </tr>
                        
                        <?php } 
                        ?>
                        
                        <?php
                        // Query ptpr_registration table
                        $ptprQuery = "SELECT permit_type, regDate FROM ptpr_registration WHERE ptpr_id = $last_id";
                        $ptprResult = mysqli_query($conn, $ptprQuery);
                        if (!$ptprResult) {
                            die("Error retrieving ptpr registration data: " . mysqli_error($conn));
                        }
                        
                        while ($ptprRow = mysqli_fetch_assoc($ptprResult)) {
                            $permitType = $ptprRow['permit_type'];
                            $dateIssued = $ptprRow['regDate'];
                            ?>

                            <tr>
                                <td><?php echo $permitType; ?></td>
                                <td><?php echo $dateIssued; ?></td>
                                <td class="text">Status</td>
                                <td class="text-center">
                                    <button class="btn btn-success" id="btn-edit">Edit</button>
                                    <form action="cert_priv-treeplantation.php" method="post">
                                        <button class="btn btn-outline-success">Print</button>
                                    </form>
                                </td>
                            </tr>
                        
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>