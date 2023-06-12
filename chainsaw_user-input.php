
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
            <p class="text-center display-6 pt-4 wel__txt-head">Chainsaw Registration</p>
        </div>
        <hr>
        <!-- GAPILIIAN NILA KUNG ANONG PERMIT TRIP NILA KUNIN -->
    <form action="reg_chainsaw_process.php" method="post" class="row g-3 p-5 pt-0">
        <hr>
        <p class="head-text">Owner's Details:</p>
        <div class="col-md-6">
            <input type="text" placeholder="First Name" required id="fName" name="f_Name" class="form-control">
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
            <input type="text" placeholder="Postal ID" required id="pId" name="pId" class="form-control">
        </div>
        <hr>
        <p class="head-text">Chainsaw Complete Details</p>
        <div class="col-md-6">
            <label for="cVerification" class="form-label">Chainsaw Verification:</label>
            <input type="file" placeholder="Chainsaw Verification"  id="cVerification" name="cVerification" class="form-control">
        </div>
        <div class="col-md-6">
                <select name="cStore" id="cStore" class="form-select">
                    <option value="" disabled selected>Chainsaw Store</option>
                    <option value="reg_chainsaw.php">Chainsaw Registration</option>
                    <option value="reg_forest.php">Forestry Registration</option>
                    <option value="reg_ptpr.php">Registration for PTPR</option>
                    <option value="chain_renew.php">Chainsaw Certification Renewal</option>
                </select>
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="Chainsaw Brand Name" required id="cBrand" name="cBrand" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="Chainsaw Model" required id="cModel" name="cModel" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="Serial Number" required id="sNum" name="sNum" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="Date of Acquisition" required id="datepicker" name="dAcq" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="Engine Displacement" required id="eDisplace" name="eDisplace" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="Length of Blade" required id="lBlade" name="lBlade" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="Country of Origin" required id="cOrig" name="cOrig" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="number" placeholder="Purchase Price" required id="cPrice" name="cPrice" class="form-control">
        </div>
    <hr>
        <div class="container">
                <div class="row justify-content-evenly">
                    <div class="col-6">
                        <div class="form-group mb-3">
                        <label for="chainsawReceipt" class="form-label">Chainsaw Receipt:</label>
                        <input type="file" class="form-control" id="chainsawReceipt" name="chainsawReceipt">
                        <div class="d-flex justify-content-end">
                            <small class=" text-danger">*Image should not exceed 2mb</small>
                        </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-3">
                        <label for="mayorsPermit" class="form-label">Mayor's Permit:</label>
                        <input type="file" class="form-control" id="mayorsPermit" name="mayorsPermit">
                        <div class="d-flex justify-content-end">
                            <small class=" text-danger">*Image should not exceed 2mb</small>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- <div class=" row text-white d-flex justify-content-center mt-3">
                <form action="reg_chainsaw_process.php" method="post"></form>m
                    <button type="submit" class="btn btn-primary col-sm-5 mx-2 btn__sub text-white mt-1" id="btn-sub" style="background-color:#00796B ">
                        SUBMIT
                    </button>
                <button type="button" class="btn btn-outline-success col-sm-5 btn__draft mt-1" id="btn-draft">
                    SAVE AS DRAFT
                </button>
            </div> -->
    </form>


    </main>
    <script src="script/index.js"></script>
</body>
</html>