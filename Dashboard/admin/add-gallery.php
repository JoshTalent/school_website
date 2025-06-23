<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Gallery - GSP</title>
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
      <h1>Add School Gallery</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Manage Gallery</li>
          <li class="breadcrumb-item active">Add School Gallery</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add School Gallery</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

                <div class="row mb-4">
                  <label for="inputText" class="col-sm-2 col-form-label fw-bold">Title Gallery</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control shadow-sm" name="title" required>
                    <div class="invalid-feedback">Please provide a title.</div>
                  </div>
                </div>
               
                <div class="row mb-4">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Choose Category Gallery</label>
                    <div class="col-sm-10">
                      <select name="type" class="form-select shadow-sm" required>
                        <option value="" selected disabled> -- Choose --</option>
                        <option value="best">Best Perfomer</option>
                        <option value="gallery">Gallery</option>
                      </select>
                      <div class="invalid-feedback">Please select a category.</div>
                    </div>
                  </div>
                
                <div class="row mb-4">
                  <label for="formFile" class="col-sm-2 col-form-label fw-bold">Thumbnail Image</label>
                  <div class="col-sm-10">
                    <input class="form-control shadow-sm" type="file" id="formFile" name="thumbnail" required>
                    <div class="invalid-feedback">Please choose a thumbnail image.</div>
                    <small class="text-muted">Recommended size: 800x600px</small>
                  </div>
                </div>

                <div class="row mb-4">
                  <label for="formFileMain" class="col-sm-2 col-form-label fw-bold">Image</label>
                  <div class="col-sm-10">
                    <input class="form-control shadow-sm" type="file" id="formFileMain" name="image" required>
                    <div class="invalid-feedback">Please choose a main image.</div>
                    <small class="text-muted">Recommended size: 1200x800px</small>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary px-4 py-2 shadow-sm" name="save">
                      <i class="bi bi-cloud-upload me-2"></i>Submit Form
                    </button>
                  </div>
                </div>

                <?php

                    if (isset($_POST['save'])) {

                        include('../component/connection.php');


                        $tilte = $_POST["title"];
                        $type = $_POST["type"];

                        $thumbnail = $_FILES['thumbnail']['name'];
                        $thumblocation = $_FILES['thumbnail']['tmp_name'];

                        $thumbimage = "./image/" . $thumbnail;
                        move_uploaded_file($thumblocation, $thumbimage);

                        $ifoto = $_FILES["image"]["name"];
                        $loc = $_FILES["image"]["tmp_name"];

                        $folder = "./image/" . $ifoto;

                        move_uploaded_file($loc, $folder);

                        $sql = "INSERT INTO `gallery`(`id`, `title`, `thumbnail`, `type`, `image`) VALUES (NULl,'$tilte','$thumbimage','$type','$thumbimage')";

                        $res = mysqli_query($con, $sql);

                        if ($res) {
                              ?>
                              <script>
                                alert("operation are perform well")
                              window.location.href = "overview-gallery.php";
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