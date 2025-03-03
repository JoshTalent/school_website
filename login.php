<?php
include("connect.php");

session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> Login - GS Des Praent</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/mode.css">

</head>

<body class="courses-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.php" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">GS Des Parents</h1>
            </a>
            <a class="btn-getstarted" href="index.php">Back <i class="bi bi-arrow-left"></i></a>
        </div>
    </header>

    <main class="main">

        <section class="section register d-flex flex-column align-items-center justify-content-center main-form">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-7 ">
                        <div class="card-body body-form">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Only school administrator</h5>
                                <p class="text-center small">Enter your email address &amp; password to login</p>
                            </div>

                            <form class="row g-3 p-4 needs-validation" method="post">

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Email Address</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="email" name="data" class="form-control" id="yourUsername"
                                            required="">
                                        <div class="invalid-feedback">Please enter your username.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="ndata" class="form-control" id="yourPassword"
                                        required="">
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" value="true"
                                            id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit" name="save">Login</button>
                                </div>

                            </form>
                            <?php




                            if (isset($_POST['save'])) {


                                $data = $_POST['data'];
                                $ndata = md5($_POST['ndata']);

                                if ("SELECT * FROM `school_info` WHERE `email` ='$data'  and  `password`='$ndata' ") {

                                    $check = mysqli_query($con, "SELECT * FROM `school_info` WHERE `email` ='$data'  and  `password`='$ndata' ");

                                    $row = mysqli_num_rows($check);

                                    if ($row == 1) {
                                        $_SESSION['email'] = $data;
                            ?>
                            <script>
                            window.location.href = "./Dashboard/admin/index.php";
                            </script>
                            <?php

                                    } else {
                                    ?>
                            <script>
                            alert("Incorrect Credentioals Please Try Again")
                            </script>
                            <?php
                                    }
                                }
                            }

                            ?>

                        </div>
                    </div>

                </div>

        </section>

    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">GS Des Parents</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://linktr.ee/gnintellex">GN IntelleX</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <style>
    .main-form {
        background-color: rgba(0, 0, 255, 0.075);
    }

    .body-form {
        background-color: white;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;

    }
    </style>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>