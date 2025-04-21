

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
        <div class="col-lg-6">
          <!-- Card with an image on top -->
          <a href="<?php echo $row['image']; ?>" class=" rounded-3 "
          data-sub-html='<h6 class="fs-sm text-light">Gallery image caption</h6>'>
            <div class="card">
              <img src="<?php echo $row['thumbnail']; ?>" class="card-img card" style="height:350px; object-fit:cover" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                <p class="card-text col-12 text-center">
                <button class="btn col-5 btn-danger">
                  <a href="delete-gallery.php?delete_id=<?php echo $row['id']; ?>" class="text-white">
                        delete
                    </a>
                </button>
                <button class="btn col-5 btn-success">
                    <a href="update-gallery.php?update_id=<?php echo $row['id']; ?>" class="text-white">
                        update
                    </a>
                </button>
                </p>
              </div>
            </div><!-- End Card with an image on top -->
          </a>
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