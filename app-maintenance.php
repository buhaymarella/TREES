<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>App Maintenance Page</title>
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
                            <a href="dashboard.php" class="nav__link text-white text-decoration-none">Home</a>
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
        <div class="container section-body pb-0 p-5">
            <div class="section-container mb-lg-5" >
            <table class="table table-triped-columns table-bordered border-success text-center">
                    <thead> 
                        <tr>
                            <div class="container sec__nav-container p-1 pt-0 pb-4" style="background-color: var(--primary-color); margin-bottom: -3%;">
                                <div class="row mt-3 mx-4">
                                    <h2 class="h2 text-white col-sm-4 mt-4 mb-0 pb-0">User Application</h2>
                                    <p class="text-white mt-0 pt-0 mx-2">Apply Application Request</p>
                                </div>
                            </div>
                        </tr>
                        <tr style="background-color: #B2DFDB">
                            <th scope="col" class="p-3">Type of Application</th>
                            <th scope="col" class="p-3">User Status</th>
                            <th scope="col" class="p-3 text-center">Staus</th>
                            <th scope="col" class="p-3 text-center"> </th>
                            <th scope="col" class="p-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chainsaw Registration Permit</td>
                            <td>Draft</td>
                            <td>Returned</td>
                            <td><button class="btn btn-outline-success" >View</button></td>
                            <td  class="text-center">
                                <button class="btn btn-success col" id="btn-edit" >Edit</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chainsaw Registration Permit</td>
                            <td>Draft</td>
                            <td>Returned</td>
                            <td><button class="btn btn-outline-success" >View</button></td>
                            <td colspan="2" class="text-center">
                                <button class="btn btn-success col" id="btn-edit" >Edit</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chainsaw Registration Permit</td>
                            <td>Draft</td>
                            <td>Returned</td>
                            <td><button class="btn btn-outline-success" >View</button></td>
                            <td colspan="2" class="text-center">
                                <button class="btn btn-success col" id="btn-edit" >Edit</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chainsaw Registration Permit</td>
                            <td>Draft</td>
                            <td>Returned</td>
                            <td><button class="btn btn-outline-success" >View</button></td>
                            <td colspan="2" class="text-center">
                                <button class="btn btn-success col" id="btn-edit" >Edit</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>