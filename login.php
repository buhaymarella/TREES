<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Login</title>
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
    <main class="body__main-container" style="background-image: url('images/bg_log.png'); background-repeat: no-repeat; background-position: bottom left -2.1rem; background-size: 500px;">
        <div class="main__input-container pt-5">
            <div class="main__input-header">
                <img src="images/logo.png" class="img__head-log img-fluid mx-auto d-block" >
                <p class="text-center display-6 pb-4 wel__txt-head">WELCOME</p>
            </div>
            <form action="log-user.php" method="post">
                <input type="text" placeholder="      Username" id="uName" name="uName" class="form-control" style="background-image: url('images/username.png'); background-repeat:no-repeat; background-position: 0.2rem; " onfocus="removeBackgroundImage(this)"><br>
                <input type="password" placeholder="       Password" id="pass" name="pass"  class="form-control" style="background-image: url('images/pass.png'); background-repeat:no-repeat; background-position: -0.2rem ; background-size: 35px;" onfocus="removeBackgroundImage(this)">
                <!-- <button name="sPass" id="sPass" class="eye__btn" onclick="togglePassword();"><img src="images/eye.png" style="width:30px; height:30px;"></button> -->
                
                <a href="#" class="text-decoration-none link__txt-input">Forgot Password?</a>
                <select name="type_User" id="type_User"  class="form-control form-select">
                    <option value="" selected disabled>Login As</option>
                    <option value="admin" name="admin" id="admin">Admin</option>
                    <option value="user" name="user" id="user">User</option>
                </select><br>
                <button type="submit" name="login" id="login" class="btn btn-primary btn__log">Login</button>
            </form><br>
            <hr>
            <p class="text-center text__footer">Don't have an account? <a href="register.php" class="text-decoration-none reg__footer-txt">Register Now</a></p>
        </div>
    </main>
</body>
<script src="script/index.js"></script>
</html>