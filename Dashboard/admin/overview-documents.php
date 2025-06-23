<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Overview Documents - GSP</title>
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
  <h1>Overview Documents</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Documents</li>
      <li class="breadcrumb-item active">Overview Documents</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row align-items-top gy-3 d-flex">
                <?php
                $sql = "SELECT `id`, `title`, `discription`, `image` FROM `uploads` ORDER BY id DESC ";

                $query = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_array($query)) {
                ?>
     <div class="col-lg-4">
        <div class="card h-100 shadow-sm hover-shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title mb-0 text-primary"><?php echo $row['title']; ?></h5>
                <span class="badge bg-light text-dark">Document</span>
            </div>
            <p class="text-muted mb-3" style="max-height: 60px; overflow: hidden;"><?php echo $row['discription'];?></p>
            <!-- Vertically centered Modal -->
            <button type="button" class="btn btn-outline-primary w-100 shadow-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                <i class="bi bi-file-earmark-text me-2"></i>View Document
            </button>
            <div class="modal fade" id="verticalycentered" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold"><?php echo $row['title']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light p-3">
                    <embed src="<?php echo $row['image']; ?>" type="" width="100%" height="600px" class="border rounded shadow-sm">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary shadow-sm" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-2"></i>Close
                    </button>
                    <button type="button" class="btn btn-danger shadow-sm">
                        <a href="delete-document.php?delete_id= <?php echo $row['id']; ?>" class="text-white text-decoration-none">
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