<?php
session_start();
//bring back to login if there is no session
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: login.php');
    exit;
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Permit One</title>
</head>
<body class="body__container">
    <nav class="header__nav-container container-fluid nav-bar p-2"> <!-- Main Nav -->
        <ul class="container d-flex flex-row gap-4 pt-2">
            <li class="nav-item">
                <a href="profilepage.php" class="nav__link text-white text-decoration-none">Home</a>
            </li>
            <li class="nav-item">
                <a href="profilepage.php" class="nav__link text-white text-decoration-none">Profile</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav__link text-white text-decoration-none">Login</a>
            </li>
            <li class="nav-item">
                <a href="register.php"class="nav__link text-white text-decoration-none" >Register</a>
            </li>
        </ul>
    </nav>
    <main class="body__main-container container-fluid" style="border-radius:9px;">
        <div class="main__input-header d-flex p-4">
            <img src="images/logo.png" class="img__head-log img-fluid mx-auto px-2" >
            <p class="text-center display-6 pt-4 wel__txt-head">Chainsaw Certificate Renewal</p>
        </div>
        <hr>
        <!-- GAPILIIAN NILA KUNG ANONG PERMIT TRIP NILA KUNIN -->
    <form action="#" method="post" class="row g-3 p-5 pt-0">
        <p class="head-text">Purpose:</p>
            <div class="col-md-6">
                <select name="form-select" id="form-select" class="form-select" onclick="navigateToPage();">
                    <option value="" disabled>Choose One</option>
                    <option value="chainsaw_reg.php" >Chainsaw Registration</option>
                    <option value="reg_forest.php">Forestry Registration</option>
                    <option value="reg_ptpr.php">Registration for PTPR</option>
                    <option value="chain_renew.php"selected>Chainsaw Certification Renewal</option>
                </select>
            </div>
        <hr>
        <p class="head-text">Owner's Detail:</p>
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
            <input type="text" placeholder="City/Province" required id="city" name="city" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="Purpose" required id="chainPur" name="chainPur" class="form-control">
        </div>
        <hr>
        <div class="col-md-6">
            <label for="chainCert" class="form-label">Old Chainsaw Certificate of Registration:</label>
            <input type="file" class="form-control" id="chainCert" name="chainCert">
            <div class="d-flex justify-content-end">
                <small class=" text-danger">*Image should not exceed 2mb</small>
            </div>
        </div>
        <div class="col-md-6">
            <label for="mayorsPermit" class="form-label">Mayor's Permit:</label>
            <input type="file" class="form-control" id="mayorsPermit" name="mayorsPermit">
            <div class="d-flex justify-content-end">
                <small class=" text-danger">*Image should not exceed 2mb</small>
            </div>
        </div>
            <hr>
            <div class=" row text-white d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary col-sm-5 mx-2 btn__sub text-white mt-1" id="btn-sub" style="background-color:#00796B ">
                    SUBMIT
                </button>
                <button type="button" class="btn btn-outline-success col-sm-5 btn__draft mt-1" id="btn-draft">
                    SAVE AS DRAFT
                </button><br>
            </div>
    </form>


    </main>
    <script src="script/index.js"></script>
</body>
</html>