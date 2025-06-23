<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Overview User - GSP</title>
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
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  
<!-- ======= Header components with aside bar ======= -->
<?php include('../component/header.php') ?>
  <!-- End Header -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Overview Gallery</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Manager Gallery</li>
          <li class="breadcrumb-item active">Overview Gallary</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">
        
        <!-- card for presentation gallery start -->
         
        <?php 
         
        include('../component/connection.php');

        $sql = "SELECT * FROM `gallery` ORDER BY `id` DESC";

        $check = mysqli_query($con , $sql);
        while ($row = mysqli_fetch_array($check)) {
            ?>
        <div class="col-lg-6 mb-4">
          <div class="card gallery-card border-0 shadow-lg h-100 position-relative overflow-hidden">
            <div class="gallery-img-wrapper position-relative">
              <img src="<?php echo $row['thumbnail']; ?>" class="card-img-top gallery-img transition" style="height:350px; object-fit:cover" alt="Gallery Image">
              <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center transition" style="background:rgba(0,0,0,0.55); opacity:0;">
                <a href="<?php echo $row['image']; ?>" class="btn btn-light btn-lg mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="View Full Image"><i class="bi bi-arrows-fullscreen"></i></a>
                <span class="badge bg-primary mb-2 px-3 py-2 fs-6 text-uppercase shadow">Type: <?php echo ucfirst($row['type']); ?></span>
                <span class="text-white-50 small">ID: <?php echo $row['id']; ?></span>
              </div>
            </div>
            <div class="card-body p-4">
              <h5 class="card-title text-primary mb-3 fw-bold text-truncate" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></h5>
              <div class="d-flex justify-content-between gap-2">
                <a href="delete-gallery.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-outline-danger flex-grow-1 shadow-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                  <i class="bi bi-trash me-2"></i>Delete
                </a>
                <a href="update-gallery.php?update_id=<?php echo $row['id']; ?>" class="btn btn-outline-success flex-grow-1 shadow-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update">
                  <i class="bi bi-pencil-square me-2"></i>Update
                </a>
              </div>
            </div>
          </div>
          <style>
            .gallery-card .gallery-img-wrapper { transition: box-shadow 0.3s; }
            .gallery-card:hover .gallery-img { transform: scale(1.08); filter: brightness(0.8); }
            .gallery-card .gallery-img { transition: transform 0.4s, filter 0.4s; }
            .gallery-card:hover .gallery-overlay { opacity: 1 !important; }
            .gallery-overlay { transition: opacity 0.4s; z-index: 2; }
            .gallery-card { border-radius: 18px; overflow: hidden; }
            .gallery-card .card-body { background: #f8f9fa; border-bottom-left-radius: 18px; border-bottom-right-radius: 18px; }
          </style>
        </div>
        <!-- card for presentation gallery ends -->
        <?php }  ?>
                  

      </div>
    </section>

  </main>

 <!-- ======= Footer Start======= -->
 <?php include('../component/footer.php') ?>
   <!-- ======= Footer Ends ======= -->

</body>

</html>