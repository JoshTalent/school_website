<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Profile - GSP </title>
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
  <?php include('../component/header.php') ?>
  <!-- End Header -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <?php
               include('../component/connection.php');

                $sql = "SELECT `name`,`image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked` FROM `school_info`";

                $query = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_array($query)) {
                ?>
              <img src="<?php echo $row['image']; ?>" alt="Profile" class="rounded-circle">
              <h2><?php echo $row['name']; ?></h2>
              <?php } ?>
              <h3>Web Designer</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
                  <?php
                  include('../component/connection.php');

                    $sql = "SELECT `name`,`image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked` FROM `school_info`";

                    $query = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic"><?php echo $row['about'];?></p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['name']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['location']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['phone']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['email']; ?></div>
                  </div>
                   <?php } ?>
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" enctype="multipart/form-data">
                  <?php
                  include('../component/connection.php');

                    $sql = "SELECT `name`,`image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked` FROM `school_info`";

                    $query = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="<?php echo $row['image']; ?>" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload">
                            <input type="file" name="image" id="">
                          </i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>
                    

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input  name="names" type="text" class="form-control" id="fullName" value="<?php echo $row['name'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea  name="about" class="form-control" id="about" style="height: 100px"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="<?php echo $row['location'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $row['phone'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $row['email'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div>
                    <?php }?>
                    <div class="text-center">
                      <button type="submit"  name="save" class="btn btn-primary">Save Changes</button>
                    </div>

                    <?php
                    if (isset($_POST['save'])) {

                       include('../component/connection.php');

                        $name = $_POST["names"];
                        $image = $_FILES["image"]["name"];
                        $loc = $_FILES["image"]["tmp_name"];
                        $folder = "./image/" . $image;
                        move_uploaded_file($loc, $folder);

                        $email = $_POST["email"];
                        $about = $_POST['about'];
                        $location = $_POST["address"];
                        $phone = $_POST["phone"];
                        $headmaster = ['headmaster'];
                        $pobox = $_POST["pobox"];
                        $face = $_POST["facebook"];
                        $insta = $_POST["instagram"];

                        $sql = "UPDATE `school_info` SET `name`='$name',`image`='$folder',`email`='$email',`about`='$about',`location`='$location',`phone`='$phone',`headmaster`='$headmaster',`pobox`='$pobox',`facebook`='$face',`instagram`='$insta'";

                        $res = mysqli_query($con, $sql);

                        if ($res) {
                         echo "<script>window.location.hreh = 'users-profile.php'; </script>";
                        } else {
                            echo "<h1>data do not inserted</h1>";
                        }
                    }
                    ?>
                  </form><!-- End Profile Edit Form -->

                </div>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>
                  <?php
                    include('../component/connection.php');

                    $sql = "SELECT `password` FROM `school_info`";

                    $query = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword" placeholder="<?php echo $row['password'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                        <?php } ?>
                    <div class="text-center">
                      <button type="submit" name="save" class="btn btn-primary">Change Password</button>
                    </div>
                    <?php
                      if (isset($_POST['save'])) {

                          $link = $_POST["password"];
                          $pro = md5($_POST["newpassword"]);
                          $sql = "UPDATE `school_info` SET `password`='$pro'";
                          $res = mysqli_query($con, $sql);

                          if ($res) {
                       echo "<script>alert('Thanks for changing school password');
                       window.location.hreh = 'users-profile.php'</script>";
     
                          } else {
                              echo "<h1>data do not inserted</h1>";
                          }
                      }?>

                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

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