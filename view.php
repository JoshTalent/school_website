<?php
include("connect.php");
?>
            <?php  
            if(isset($_GET['get_id'])){
                $id = $_GET['get_id'];
            }
            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Courses - GS Des Praent</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
                <h1 class="sitename">GSP Document</h1>
            </a>
           
            <?php
            include('connect.php');

            $sql = "SELECT * FROM `uploads` WHERE `id`='$id' ";

            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($query)) {
            ?>
              <button class="btn btn-success">
                    <i class="bi bi-download">
                        <a href="./Dashboard/admin/<?php echo $row['image']; ?>" download class="btn">
                            download
                        </a>
                    </i>
                </button>
            <?php } ?>
            
        </div>
    </header>


    <main class="main">
        <div class="container">
            <div class="row">
            <?php
            include('connect.php');

            $sql = "SELECT * FROM `uploads` WHERE `id`='$id' ";

            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($query)) {
            ?>
            
               <p><?php echo $row['discription']; ?></p>
            <?php } ?>
            </div>
             <div class="row posts">
            
          
            <?php
            include('connect.php');

            $sql = "SELECT * FROM `uploads` WHERE `id`='$id' ";

            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="row">
            <embed src="./Dashboard/admin/<?php echo $row['image']; ?>" class="images" type="" width="100%" height="600"></embed>

            </div>
            <?php } ?>
        </div>
        </div>
       

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
    .images{
        object-fit: cover;
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