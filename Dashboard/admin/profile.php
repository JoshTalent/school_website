<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">


    <?php include('../component/dos_header.php'); ?>




    <main class="main" id="main">
        <div class="row">
            <div class="">
                <h1 class="text-center" style="font-weight:bold;color:blue">School Profile</h1>
            </div>
        </div>
        <?php
        include('connect.php');

        $sql = "SELECT `name`,`image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked` FROM `school_info`";

        $query = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($query)) {
        ?>
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="<?php echo $row['image']; ?>" alt="Profile" class="rounded-4" style="width:400px">
                        <h2><?php echo $row['name']; ?></h2>

                        <div class="social-links mt-2">
                            <a href="<?php echo $row['x']; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="<?php echo $row['facebook']; ?>" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="<?php echo $row['instagram']; ?>" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="<?php echo $row['linked']; ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">About</h5>
                                <p class="small fst-italic"><?php echo $row['about']; ?></p>

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">School Name</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['name']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['email']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">location</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['location']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['phone']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">HEAD MASTER</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['headmaster']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">PO : BOX</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['pobox']; ?></div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
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


    <?php include('../component/footer.php') ?>
</body>

</html>