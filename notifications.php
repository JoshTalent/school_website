<?php include("./assets/components/head.php"); ?>
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-bread-title"><a href="#"><i
                                class="bi bi-home-alt fs-lg me-1"></i>Home</a></li>
                    <li class="breadcrumb-item  text-bread-title" aria-current="page">Notifications</li>
                </ol>
            </nav>
            <style>
            .text-bread-title {
                font-weight: bold;
            }
            </style>
        </div>
    </div>
    <div class="container">
        <div class="row gy-4 pt-4">
            <h2 class="text-center mb-4">School Notifications</h2>
            <?php
            include('connect.php');

            $sql = "SELECT `title`, `notification` ,`created_at` FROM `notifications` ORDER BY id DESC ";

            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($query)) {
            ?>

            <div class="col-lg-6">
                <div class="card h-100 shadow-sm hover-shadow border-0">
                    <div class="card-header bg-primary text-white d-flex align-items-center">
                        <i class="bi bi-bell fs-4 me-2"></i>
                        <h5 class="mb-0">New Notification</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-primary"><?php echo $row['title']; ?></h5>
                        <p class="card-text text-muted"><?php echo $row['notification']; ?></p>
                        <div class="d-flex align-items-center mt-3">
                            <i class="bi bi-clock me-2 text-muted"></i>
                            <small class="text-muted"><?php echo $row['created_at']; ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</main><!-- End #main -->


<?php include("./assets/components/foot.php"); ?>