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
    <title>CERTIFICATION OF VERIFICATION Page</title>
</head>
<body>
    <style>
        .permit__container p, span, td{
            font-family:'Times New Roman', Times, serif;
        }
        .main-text,.title,.name, span, .name-officer{
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
        .content-txt{
            text-align: justify;
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
        td, .th{
            border-bottom: none;
        }
        .italic{
            font-style: italic;
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
            <p class="mb-0 mt-0 p-0 sub-text text-start">Control No. <input type="text" style="border: none; outline: none; border-bottom: 1px solid; background-color: transparent;" disabled></p>
            <p class="mt-0 mb-1 title">CERTIFICATE OF VERIFICATION</p>
        </div>
        <div class="p-5 pt-2 pb-0 mb-0">
            <p class="text-start px-5 pb-0 mb-0 content-txt fw-bold">To all concern:</p>
            <p class="text-justify p-5 pt-0 pb-0 content-txt ">
                Be informed that I, <span>(FULL NAME OF USER)</span> is a holder of <span>Private Land of Timber Permit</span> from the DEN PENRO Marinduque bearing Number <span>(CONTROL NUMBER)</span> to cut/utilize/manufacture (QUANTITY OF TREES NAME OF TREES)  trees located at (ADDRESS WHERE CAME FROM). That I am transporting the following forest products gathered from (ADDRESS WHERE CAME FROM) described as follows, to wit:
            </p>
            <table class="table m-3 mt-0 mb-0 px-5 pt-0 m-5 table-borderless">
                <tr class="mb-0 pb-0 lh-1">
                    <td class="pb-0 mt-0">1. Kind, species, quantity & vol. of forest products.</td>
                    <td class="pb-0 mt-0"></td>
                </tr>
                <tr class="mb-0 pb-0 lh-1">
                    <td class="pb-0 mt-0">2. Conveyance</td>
                    <td class="pb-0 mt-0"></td>
                </tr>
                <tr class="mb-0 pb-0 lh-1">
                    <td class= "pb-0 mt-0">3. Driver</td>
                    <td class="pb-0 mt-0"></td>
                </tr>
                <tr class="mb-0 pb-0 mt-0 lh-1">
                    <td class="pb-0 mt-0">4.Consignee/Destination</td>
                    <td class="pb-0 mt-0"></td>
                </tr>
            </table>
            <div class="text-end">
                <p class="sub-text text-decoration-underline pb-0 mb-0 fw-bold">NAME OF USER</p>
                <p class="mt-0 pt-0 mx-3 px-3 lh-1">Owner</p>
            </div>
            <p class="text-center sub-text fw-bold lh-1 pb-0 mb-0">CERTIFICATION</p>
            <div class="mt-0 pt-0 pb-2 mb-0">
                <p class="text-start px-5 pb-0 mb-0 content-txt fw-bold">To whom it may concern:</p>
                <p class="text-justify p-5 pt-0 pb-0 mb-0 content-txt">
                    &nbsp &nbsp &nbsp This is to certify that the above described forest has been verified by this  Office to have originated from the private land and is hereby allowed to be transported with the following partculars:
                </p>
            </div>
            <table class="table p-5 pb-0 pt-0 mb-0 mt-0 table-borderless m-5">
                <tbody class="p-5m-5">
                    <tr class="mb-0 pb-0">
                        <td class="text-center p-0 m-0 col-sm-2 lh-1" style="vertical-align: middle;">Described Route</td>
                        <td colspan="2" class="p-0 m-0">
                            <table class="table table-borderless mb-0 pb-0">
                                <tr class="p-0 m-0">
                                    <td class="col-sm-1 p-0 m-0">From</td>
                                    <td class="p-0 m-0 col-sm-5">: ADDRESS KUNG SAAN GALING</td>
                                </tr>
                                <tr class="p-0 m-0">
                                    <td class="col-sm-1 p-0 m-0">To</td>
                                    <td class="p-0 m-0 col-sm-5">: ADDRESS KUNG SAAN DALHIN</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="pt-0 pb-0 mb-0 mt-0">
                        <td class="text-center p-0 m-0 col-sm-2 lh-1" style="vertical-align: middle;">Validity Date</td>
                        <td colspan="2" class="p-0 m-0">
                            <table class="table table-borderless mb-0 pb-0" style="vertical-align: middle;">
                                <tr class="p-0 m-0">
                                    <td class="col-sm-1 p-0 m-0">From</td>
                                    <td class="col-sm-5 p-0 m-0">: ADDRESS KUNG SAAN GALING</td>
                                </tr>
                                <tr class="p-0 m-0">
                                    <td class="col-sm-1 p-0 m-0">To</td>
                                    <td class="p-0 m-0 col-sm-5">: ADDRESS KUNG SAAN DALHIN</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="pt-0 pb-0 mb-0 mt-0">
                        <td class="text-center m-0 p-0 col-sm-2 lh-1" style="vertical-align: middle;">Others</td>
                        <td colspan="2" class="m-0 p-0">
                            <table class="table table-borderless p-0 m-0">
                                <tr class="m-0 p-0">
                                    <td class="p-0 m-0">:________________________</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-0 pt-0 pb-0 mb-0">
                <p class="text-justify p-5 pt-0 pb-1 mb-0 content-txt">
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Certification and inspection fees in the amount of Php________ in the favor of the Department of Environment and Natural Resources were paid under Official Receipt No._______ dated______________________.
                </p>
                <p class="text-start px-5 pb-0 pt-2 mb-0 content-txt">Sealed by:</p>
            </div>
            <div class="text-start m-5 mb-0 mt-2 p-5 pt-0 pb-0">
                <p class="sub-text text-decoration-underline pb-0 mb-0 fw-bold">RANDY N. ESTRELLA</p>
                <p class="mt-0 pt-0 mx-3 px-3 lh-1">Forest Ranger</p>
            </div>
            <div class="text-end mb-0 mt-2 pt-0 pb-0 mt-0">
            <p class="text-end px-5 mx-5 pb-4 pt-0 mt-0 mb-0 content-txt">Attested by:</p>
                <p class="sub-text text-decoration-underline pb-0 mb-0 fw-bold">Engr. CYNTHIA U. LOZANO</p>
                <p class="m-0 p-0  lh-1">Chief, Technical Services Division</p>
            </div>
            <p class="text-center px-5 pb-0 pt-2 mb-0 content-txt"><span>NOTE:</span> The shipper is liable of any unaccounted lumbers or forest products aside from the herein certified lumber shipment.</p>
            <p class="text-center px-5 pb-0 pt-0 mt-0 mb-0 content-txt italic">THIS PERMIT IS NOT VALID IF IT CONTAINS ERASURE OR ALTERATION</p>
        </div>
        <hr style="border: 1px dashed;" class="m-0 p-0">
        <div class="m-5 my-0">
            <p class="mb-0 mt-0 p-0 sub-text text-start">Control No. <input type="text" class="m-0 p-0 "style="border: none; outline: none; border-bottom: 1px solid; background-color: transparent;" disabled></p>
            <p class="text-center sub-text fw-bold lh-1 pb-0 mt-1 mb-0">ARRIVAL CONFIRMATION RECEIPT</p>
            <p class="text-start px-5 pb-0 pt-2 mb-0 content-txt">This is to acknowledge the arrival of the transported forest products within this area of responsibility with the following particulars, to wit:</p>
        </div>
        <div class="m-5 my-0 row">
            <div class="col">
                <p class="text-start px-5 pb-0 pt-0 mb-0 content-txt">1. Volume, Kind and species:</p>
                <p class="text-start px-5 pb-0 pt-0 mb-0 content-txt">2. SMF Control No.:</p>
                <p class="text-start px-5 pb-0 pt-0 mb-0 content-txt">3. Description of Conveyance:</p>
            </div>
            <div class="col">
                <p class="text-start px-5 pb-0 pt-0 mb-0 content-txt">4. Date of Arrival:</p>
                <p class="text-start px-5 pb-0 pt-0 mb-0 content-txt">5. Consignee/Destination:</p>
                <p class="text-start px-5 pb-0 pt-0 mb-0 content-txt">6. Sealer:</p>
            </div>
        </div>
        <div class="m-5 my-3">
                <p class="text-start px-5 pb-0 pt-0 mb-0 content-txt">ORIGINAL COPY:    :OWNER T0 ACCOMPANY TRANSPORT</p>
                <p class="text-start px-5 pb-0 pt-0 mb-0 content-txt">DUPLICATE COPY:   :PENRO FILE</p>
                <p class="text-start px-5 pb-0 pt-0 mb-0 content-txt">TRIPLICATE:       :OWNER FILE</p>
                <br>
                <span class="content-txt">***Not valid Without Official DENR PENRO Marinduque Dry Seal***</span>
            </div>
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