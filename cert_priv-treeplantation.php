<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>PRIVATE TREE PLANTING REG Page</title>
</head>
<body>
    <style>
        .permit__container p, span, td{
            font-family:'Times New Roman', Times, serif;
        }
        .main-text,.title,.name, span, .name-officer, .content-txt{
            font-weight: bold;
        }
        .main-text{
            font-size: 20px;
        }
        .title{
            font-size: 24px;
        }
        .sub-text{
            font-size: 16px;
        }
        .content-txt, td{
            font-size: 12px;
        }
        .name{
            font-size: 32px;
        }
        .address, .name-officer{
            text-decoration: underline;
        }
        .footer-text{
            font-size: 10px;
            color: #757575;
        }
        .long-td > .inner-table > tbody > tr > td:last-child {
            border-right: none;
        }
        .inner-td{
            border-right: 1px solid;
        }
    </style>
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
    <div class="container-fluid border permit__container" id="permit" style=" color: #373737; width:816px; height:1248px; ">
        <header class=" container-fluid d-flex justify-content-start align-items-start row m-5 mt-3 mb-1">
            <table class="table table-borderless m-0 p-0">
                <tr>
                    <td class="col-sm-1 mx-0 "><img src="images/logo.png" alt="logo" style="width:4rem;"></td>
                    <td class="col-sm-7 pt-2 px-0 mx-0" style="background-color: transparent;">
                        <div>
                            <p class="mb-0 sub-text">
                                Republic of the Philippines
                            </p>
                            <p class="mt-0 mb-0 sub-text">
                                DEPARTMENT OF ENVIRONMENT AND NATURAL RESOURCES
                            </p>
                            <p class="mb-0 mt-0 main-text">
                                PENRO Marinduque
                            </p>
                        </div> 
                    </td>
                </tr>
            </table>
        </header>
        <hr class="container mt-0 mb-0" style="height: 3px; background-color: #B34C4C; border: none; opacity:100%;">
        <div class="container text-center mt-2 mb-0">
            <p class="mt-0 mb-1 title">PRIVATE TREE PLANTATION REGISTRATION</p>
            <p class="mb-0 mt-0 p-0 sub-text">No. <input type="text" style="border: none; outline: none; border-bottom: 1px solid; background-color: transparent;" disabled></p>
        </div>
        <div class=" m-5 mt-3 mb-0">
            <p class="content-txt mb-0">Owner's Basic Information</p>
            <table class="table-bordered container-fluid mt-0">
                <tr>
                    <td class="col px-3">Name</td>
                    <td class="col-8 long-td px-3">marella </td>
                </tr>
                <tr>
                    <td class="col px-3">Permanent Address</td>
                    <td class="col-8 long-td px-3">Hupi, Sta Cruz, Marinduque </td>
                </tr>
                <tr>
                    <td class="col px-3">Contact Number</td>
                    <td class="col-8 long-td px-3">090000</td>
                </tr>
                <tr>
                    <td class="col px-3">Email Address</td>
                    <td class="col-8 long-td px-3">marella@mail</td>
                </tr>
            </table>
        </div>
        <div class=" m-5 mt-3 mb-0">
            <p class="content-txt mb-0">Tree Plantation Location</p>
            <table class="table-bordered container-fluid mt-0">
                <tr>
                    <td class="col px-3">OCT/ICT No./Tax. Dec No.</td>
                    <td class="col-8 long-td px-3">marella </td>
                </tr>
                <tr>
                    <td class="col px-3">Barangay/s</td>
                    <td class="col-8 long-td px-3">Hupi, Sta Cruz, Marinduque </td>
                </tr>
                <tr>
                    <td class=" px-3">Municipality/ies</td>
                    <td class="col-8 px-3 long-td"></td>
                </tr>
                <tr>
                    <td class="col px-3">Province</td>
                        <td class="col-8 px-3 long-td">
                        <table class="table table-borderless mb-0 pb-0">
                            <tr>
                                <td class="inner-td">Section 1</td>
                                <td class="inner-td">Section 2</td>
                                <td >Section 3</td>
                            </tr>
                        </table>
                        </td>
                </tr>
                <tr>
                    <td class="col px-3">Total Lot Area</td>
                        <td colspan="3" class="px-3 long-td">
                        <table class="table table-borderless pb-0 mb-0">
                            <tr>
                                <td class="inner-td mb-0">Section 1</td>
                                <td class="inner-td mb-0 ">Total Lot Area Devoted to Plantation</td>
                                <td >Section 3</td>
                            </tr>
                        </table>
                        </td>
                </tr>
                <tr>
                    <td class=" px-3">Tree Specied Planted</td>
                    <td class="col-8 px-3 long-td"></td>
                </tr>
            </table>
        </div>
        <div class=" m-5 mt-3 mb-0">
            <p class="content-txt mb-0">Attachments</p>
            <table class="table-bordered container-fluid mt-0">
                <tr>
                    <td class="col px-3">Name</td>
                    <td class="col-8 long-td px-3">Copy of Tax Declaration </td>
                </tr>
                <tr>
                    <td class="col px-3">Permanent Address</td>
                    <td class="col-8 long-td px-3">GIS Generatrd Map of Tree Plantation</td>
                </tr>
            </table>
        </div>
        <p style="font-weight: bold;font-style: italic;" class="text-start pt-0 mt-2 mx-5">I hereby certify that the above information are true and correct.</p>
        <div class="mx-5 row">
            <div class="col">
                <p class="mb-0 mt-5 pt-3 name-officer mx-5 px-4" >NAME OF USER</p>
                <p>Signature over Printed Name of the Applicant</p>
            </div>
            <div class="col text-end ">
                <p class="mb-0 mt-5 pt-3" >__________________</p>
                <p class="mx-4 px-0 ">Date Submitted</p>
            </div>
        </div>
        <p style="font-weight: bold;font-style: italic;" class="text-start pt-0 mt-2 mx-5">I hereby certify that the above information are verified and the Private Tree Plantation registration is approved:</p>
        <div class="mx-5 row pb-5 mb-5">
            <div class="col">
                <p class="mb-0 mt-5 pt-3 name-officer" >IMELDA M. DIAZ</p>
                <p>OIC, PENR Officer</p><br>
            </div>
            <div class="col text-end ">
                <p class="mb-0 mt-5 pt-3" >__________________</p>
                <p class="mx-4 px-0 ">Date Submitted</p>
            </div>
        </div>
        <footer class="pb-0 mt-5">
            <p class="text-center footer-text mt-4">Capitol Compound, Barangay Bangbangalon, Boac, Marinduque<br>
                Telephone Nos.: (042) 332-1490/(042) 332-0927/(042) 332-1913<br>
                Website: https://penromarinduque.gov.ph/<br>
                Email: penromarinduque@denr.gov.ph</p>
        </footer>
    </div>
    <div class="container d-flex justify-content-center align-items-center mt-3 gap-2 mb-5" style="width: 50%;">
        <button class=" btn btn-success container" onclick="printDiv()">Print</button>
        <button class="btn btn-outline-success container" >Download</button>
    </div>
    <script src="script/index.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>