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
            <h1>School Notifications</h1>
            <?php
            include('connect.php');

            $sql = "SELECT `title`, `notification` ,`created_at` FROM `st_info` ORDER BY id DESC ";

            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($query)) {
            ?>

            <div class="card">
                <h5 class="card-header bg-black text-white"><i class="bi bi-bell text-primary"></i>Notification</h5>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><?php echo $row['notification']; ?></p>
                    <a href="#" class="btn"><?php echo $row['created_at']; ?></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</main><!-- End #main -->


<?php include("./assets/components/foot.php"); ?>