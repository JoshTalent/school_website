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
                <div class="card notification-card border-0 shadow h-100 position-relative overflow-hidden" style="border-radius: 18px; background: #fff;">
                    <div class="card-header bg-white border-0 d-flex align-items-center position-relative notification-header" style="border-bottom: 1px solid #e5e7eb; border-radius: 18px 18px 0 0;">
                        <span class="d-flex align-items-center justify-content-center me-3" style="width: 44px; height: 44px; background: linear-gradient(135deg, #e0e7ff 60%, #f0f7ff 100%); border-radius: 50%;">
                            <i class="bi bi-bell fs-4 text-primary"></i>
                        </span>
                        <div class="flex-grow-1">
                            <h6 class="mb-0 fw-semibold text-dark">Notification</h6>
                            <small class="text-muted fw-normal"><?php echo $row['created_at']; ?></small>
                        </div>
                    </div>
                    <div class="card-body position-relative p-4">
                        <h5 class="card-title text-dark mb-2 fw-bold text-truncate" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></h5>
                        <p class="card-text text-secondary mb-4" style="min-height: 48px;"><?php echo $row['notification']; ?></p>
                    </div>
                </div>
                <style>
                    .notification-card {
                        border-radius: 18px;
                        background: #fff;
                        box-shadow: 0 4px 24px 0 rgba(30, 64, 175, 0.07), 0 1.5px 8px 0 rgba(0,0,0,0.04);
                        transition: box-shadow 0.25s, transform 0.25s;
                    }
                    .notification-card:hover {
                        box-shadow: 0 8px 32px 0 rgba(30, 64, 175, 0.13), 0 2px 12px 0 rgba(0,0,0,0.08);
                        transform: translateY(-3px) scale(1.012);
                    }
                    .notification-header {
                        background: #fff;
                        border-bottom: 1px solid #e5e7eb;
                        border-radius: 18px 18px 0 0;
                        padding: 1.25rem 1.5rem 1rem 1.5rem;
                    }
                    .notification-card .card-body {
                        background: #fff;
                        border-bottom-left-radius: 18px;
                        border-bottom-right-radius: 18px;
                        position: relative;
                        z-index: 1;
                        padding: 2rem 1.5rem 1.5rem 1.5rem;
                    }
                    .notification-card .card-title {
                        font-size: 1.15rem;
                        font-weight: 600;
                        color: #1e293b;
                        letter-spacing: 0.01em;
                    }
                    .notification-card .card-text {
                        color: #64748b;
                        font-size: 1rem;
                        font-weight: 400;
                    }
                    .notification-card .bi-bell {
                        color: #2563eb;
                        opacity: 0.85;
                    }
                    .notification-card .bi-clock {
                        font-size: 1.1rem;
                        color: #a0aec0;
                    }
                </style>
            </div>
            <?php } ?>
        </div>
    </div>

</main><!-- End #main -->


<?php include("./assets/components/foot.php"); ?>