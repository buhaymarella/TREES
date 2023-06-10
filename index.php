<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Landing Page</title>
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
    <main class="main__container" style="background-image: url('images/land_bg.png'); background-size: cover; background-position: center;background-repeat: no-repeat;">
        <section class="main__section-con p-5">
            <article class="main__section-art p-5">
                <h1 class="p-5 text-white pb-0 display-2">
                Qorem ipsum dolor sit <br> amet consectetur
                </h1>
                <h4 class="p-5 pt-0 display-6">
                Qorem ipsum dolor sit amet consectetur
                </h4>
            </article>
            <div class="buttons pt-0 gap-3 p-5 d-flex flex-column flex-sm-row align-items-center ">
                <form action="login.php" method="post">
                    <button class="btn text-white  btn__log flex-grow-0 justify-content-center align-items-center" value="login.php">Login</button>
                </form>
                <form action="register.php" method="post">
                    <button class="btn btn-outline-primary btn__sign flex-grow-0 justify-content-center align-items-center text-white" value="signup">Sign Up</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer___container">
        <div class="footer__divider"></div>
        <div class="footer__txt-container">
            <p class="h4 ">
            Qorem ipsum dolor
            sit amet consecteturttttt
            Qorem ipsum dolor
            sit amet consectetur
            </p>
            <p class="h4">
            Qorem ipsum dolor
            sit amet consecteturttttt
            Qorem ipsum dolor
            sit amet consectetur
            </p>
            <p class="h4 ">
            Qorem ipsum dolor
            sit amet consecteturttttt
            Qorem ipsum dolor
            sit amet consectetur
            </p>
        </div>
        <hr>
        <p class="text-center h6 pb-3 m-0">
        Qorem ipsum dolor sit amet consectetur Qorem ipsum dolor <br>sit amet consectetur Qorem ipsum<br>
dolor sit am
        </p>
    </footer>
</body>
</html>