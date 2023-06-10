<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>SignUp</title>
</head>
<body class="body__container">
    <nav class="header__nav-container container-fluid nav-bar p-2"> <!-- Main Nav -->
        <ul class="container d-flex flex-row gap-4 pt-2">
            <li class="nav-item">
                <a href="index.php" class="nav__link text-white text-decoration-none">Home</a>
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
    <main class="body__main-container container" style="border-radius:9px;">
        <div class="main__input-header d-flex p-4">
            <img src="images/logo.png" class="img__head-log img-fluid mx-auto px-2">
            <p class="text-center display-6 pt-4 wel__txt-head">Account Registration</p>
        </div>
        <hr>
    <form action="user-register.php" method="post" class="row g-3 p-5 pt-0">
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
        <hr>
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
        <div class="form-check mx-2">
            <input type="checkbox" name="terms" id="terms" class="form-check-input">
            <label for="terms" class="form-check-label">I agree to the <a href="#" class="text-decoration-none  link__footer-txt">Terms and Conditions</a></label>
        </div>
        <div class="col-12 p-3 mb-2 text-white d-grid gap-3">
            <button type="submit" value="Register" name="submit" class="btn btn-primary btn-block btn__reg" id="btn-sub">
                Register
            </button>
        </div>
        <hr>
        <p class="foot_txt text-center">Already have an account? <a href="login.php" class="text-decoration-none link__footer-txt">Login</a></p>
    </form>


    </main>
    <script src="script/index.js"></script>
</body>
</html>