<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Notification - GSP</title>
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
      <h1>Add SchoolNotification</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Manage Notification</li>
          <li class="breadcrumb-item active">Add School Notifaction</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add School Notifaction</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

                <div class="row mb-4">
                  <label for="notifTitle" class="col-sm-2 col-form-label fw-bold">Title</label>
                  <div class="col-sm-10">
                    <input type="text" id="notifTitle" class="form-control shadow-sm" name="title" required>
                    <div class="invalid-feedback">Please provide a notification title.</div>
                  </div>
                </div>

                <div class="row mb-4">
                  <label for="notifContent" class="col-sm-2 col-form-label fw-bold">Notification</label>
                  <div class="col-sm-10">
                    <textarea id="notifContent" class="form-control shadow-sm" name="notification" rows="4" required></textarea>
                    <div class="invalid-feedback">Please provide notification content.</div>
                    <small class="text-muted">Write a clear and concise notification message.</small>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary px-4 py-2 shadow-sm" name="save">
                      <i class="bi bi-bell me-2"></i>Publish Notification
                    </button>
                  </div>
                </div>

                     <?php

                  if (isset($_POST['save'])) {
                      include('connect.php');

                      $tilte = $_POST["title"];
                      $des = $_POST["notification"];


                      $sql = "INSERT INTO `notifications`( `title`, `notification`) VALUES ('$tilte','$des')";


                      $res = mysqli_query($con, $sql);

                         if ($res) {
                      ?>
                      <script>
                      window.location.href = "./index.php";
                      </script>
                      <?php
                          } else {
                              echo "<h1>data do not inserted</h1>";
                          }
                      }

                      ?>



              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

 <!-- ======= Footer Start======= -->
 <?php include('../component/footer.php') ?>
   <!-- ======= Footer Ends ======= -->

</body>

</html>