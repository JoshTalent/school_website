<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> School Archive - GSP</title>
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
<?php 
include('../component/header.php');
include('../component/connection.php');
?>
  <!-- End Header -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>School Archive</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Documents</li>
          <li class="breadcrumb-item active">School Archive</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">School Archive</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title Documents</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Documents Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" image="image">
                  </div>
                </div>

                <div class="row mb-5 mt-4">
                    <button type="submit" class="btn btn-primary" name="save">School Archive</button>
                </div>
                <?php
                    if (isset($_POST['save'])) {

                        $tilte = $_POST["title"];

                        $ifoto = $_FILES["image"]["name"];
                        $loc = $_FILES["image"]["tmp_name"];

                        $folder = "./image/" . $ifoto;

                        move_uploaded_file($loc, $folder);

                        $sql = "INSERT INTO `archive`( `title`, `image`) VALUES ('$tilte','$folder')";

                        $res = mysqli_query($con, $sql);

                        if ($res) {
                    ?>
                    <script>
                  alert("Data Inserted Successfully")
                    </script>
                    <?php
                        } else {
                            echo "<script>alert('not supported');</script>";
                        }
                    }

                    ?>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
      </div>
    </section>

  </main><!--Documents

 <!-- ======= Footer Start======= -->
 <?php include('../component/footer.php') ?>
   <!-- ======= Footer Ends ======= -->
</body>

</html>