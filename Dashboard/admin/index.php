<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">

    <?php include('../component/dos_header.php'); ?>



    <main class="main" id="main">
        <div class="row">
            <div class="col-md-12 mydashboard">
                <h1>Welcome to <span>GSP</span> Dashboard</h1>
                <p>Manage GSP Account Through Here</p>
                <div class="row">
                    <div class="col-md-12 p-4 d-flex justify-content-center">
                        <a href="logout.php" class="btn btn-primary btn-sm text-primary px-4 text-white">BACK TO MAIN
                            WEBSITE</a>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <style>
    .mydashboard {
        height: 80vh;
        padding: 30px;
        background: aliceblue;
        color: white;
        background-image: url(../../Dashboard/admin/image/school.PNG);
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .mydashboard h1 {
        font-size: 320%;
        text-align: center;
        font-family: arial;
        font-weight: bold;
        color: rgb(255, 255, 255);
        margin-top: 15%;
        ;

    }

    .mydashboard h1 span {
        color: blue;
        font-family: agency FB;
    }

    .mydashboard p {
        text-align: center;

    }
    </style>



    <footer id="footer" class="footer position-relative light-background">



        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">GS Des Parents</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://linktr.ee/gnintellex">GN IntelleX</a>
            </div>
        </div>

    </footer>

    <?php include('../component/footer.php') ?>

</body>

</html>