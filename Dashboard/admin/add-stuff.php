<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Stuff - GSP</title>
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
          <li class="breadcrumb-item active">Add Stuff Members</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Stuff Members</h5>

              <!-- General Form Elements -->
              <form method="Post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text"  name="names" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email"  name="email" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="phone"  name="phone" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Choose Category</label>
                    <div class="col-sm-10">
                      <select name="category" id="" class="form-control">
                        <option value="">Trainer</option>
                        <option value="">Administrator</option>
                      </select>
                    </div>
                  </div>

                  <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                        <label class="form-check-label" for="gridRadios2">
                          Female
                        </label>
                      </div>
  
                    </div>
                  </fieldset>
 
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile"  name="image">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Profession </label>
                  <div class="col-sm-10">
                    <textarea class="form-control"  name="pro" style="height: 100px"></textarea>
                  </div>
                </div>

                <div class="row mb-5">
                  
                    <button type="submit"  name="save" class="btn btn-primary">Submit Form</button>
                </div>
                <?php
                $con = mysqli_connect("localhost", "root", "", "school");


                if (isset($_POST['save'])) {



                    $name = $_POST["names"];
                    $email = $_POST["email"];
                    $category = $_POST["category"];
                    $phone = $_POST["phone"];
                    $male = $_POST["male"];


                    $image = $_FILES["image"]["name"];
                    $loc = $_FILES["image"]["tmp_name"];

                    $folder = "./image/" . $image;
                    move_uploaded_file($loc, $folder);



                    $pro = $_POST["pro"];

                    $sql = "INSERT INTO `teachers`( `name`, `email`, `category`, `phone`, `gender`, `image`,`proffession`) VALUES ('$name','$email','$category','$phone','$male','$folder','$pro')";


                    $res = mysqli_query($con, $sql);

                    if ($res) {
                ?>
                <script>
                window.location.href = "overview-user.php";
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