

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
      <h1>Add Stuff Members</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Manager Stuff</li>
          <li class="breadcrumb-item active">Add Overview Members</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">
      <?php
            include('../component/connection.php');
            $sql = "SELECT `id`, `name`, `email`, `category`,`phone`, `gender`,`image`,`proffession`FROM `teachers` ORDER BY id DESC";

            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($query)) {
            ?>

        <div class="col-lg-4 ">
          <!-- Card with an image on top -->
          <div class="card">
            <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['name']; ?></h5>
              <p class="card-text"><?php echo $row['proffession'] ?></p>
              <a href="update-user.php?update_id= <?php echo $row['id']; ?>" class="btn btn-info m-2"><i
                                    class="bi bi-pencil-square"></i>Edit</a>
              <a href="delete-stuff.php?delete_id= <?php echo $row['id']; ?>" class="btn btn-danger m-2"><i
                                    class="bi bi-trash"></i>Delete</a>
            </div>
          </div><!-- End Card with an image on top -->
        </div>

       <?php } ?>

      </div>
    </section>

  </main>


  <!-- ======= Footer ======= -->
<?php include('../component/footer.php') ?>
 
</body>

</html>