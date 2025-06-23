        <!DOCTYPE html>
        <html lang="en">

        <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Overview  Report - GSP</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">


        </head>

        <body>

        <!-- ======= Header components with aside bar ======= -->
        <?php 
        include('../component/header.php');
        include('../component/connection.php');
        ?>
        <!-- End Header -->

        <main id="main" class="main">

        <div class="pagetitle">
        <h1>Overview  Report</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Report</li>
            <li class="breadcrumb-item active">Overview  Report</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section">
        <div class="row align-items-top gy-3 d-flex">
        <?php
        include('../component/connection.php');

        $sql = "SELECT `id`,  `name`, `email`, `subject`, `message` FROM `report` ORDER BY id DESC";

        $query = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm hover-shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title mb-0 text-primary"><?php echo $row['name']; ?></h5>
                        <span class="badge bg-light text-dark shadow-sm">
                            <i class="bi bi-envelope me-1"></i><?php echo $row['email']; ?>
                        </span>
                    </div>
                    
                    <!-- Vertically centered Modal -->
                    <button type="button" class="btn btn-outline-primary w-100 mt-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                        <i class="bi bi-eye me-2"></i>View Details
                    </button>
                    <div class="modal fade" id="verticalycentered" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content shadow">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold"><?php echo $row['subject']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="p-3 bg-light rounded">
                                <p class="mb-0"><?php echo $row['message']; ?></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary shadow-sm" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-2"></i>Close
                            </button>
                            <button type="button" class="btn btn-danger shadow-sm">
                                <a href="delete-report.php?delete_id= <?php echo $row['id']; ?>" class="text-white text-decoration-none">
                                    <i class="bi bi-trash me-2"></i>Delete
                                </a>
                            </button>
                        </div>
                        </div>
                    </div>
                    </div><!-- End Vertically centered Modal-->

                </div>
                </div>
            </div>
            <?php } ?>
        </div>
        </section>

        </main>

        <!-- ======= Footer Start======= -->
        <?php include('../component/footer.php') ?>
        <!-- ======= Footer Ends ======= -->
        </body>

        </html>