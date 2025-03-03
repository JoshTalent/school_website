<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">


    <?php include('../component/dos_header.php'); ?>



    <main class="main" id="main">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 ">

                <?php
                include('connect.php');

                $sql = "SELECT `name`,`image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked` FROM `school_info`";

                $query = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_array($query)) {
                ?>
                <form method="post" class="border border-info p-4" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9 d-flex justify-content-center">
                            <img src="<?php echo $row['image']; ?>" alt="Profile col-md-10" style="max-width:400px"
                                name="image">
                            <div class="pt-2">
                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i
                                        class="bi bi-upload"></i>
                                    <input type="file" name="image" class="form-control">
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">School Name</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="names" type="text" class="form-control" id="fullName"
                                value="<?php echo $row['name']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="about" class="form-control" id="about"
                                style="height: 100px"><?php echo $row['about']; ?></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control" id="company"
                                value="<?php echo $row['email']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">location</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="location" type="text" class="form-control" id="Country"
                                value="<?php echo $row['location']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="phone" type="text" class="form-control" id="Address"
                                value="<?php echo $row['phone']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">HEAD MASTER</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="headmaster" type="text" class="form-control" id="Phone"
                                value="<?php echo $row['headmaster']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">PO : BOX</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="pobox" type="text" class="form-control" id="Email"
                                value="<?php echo $row['pobox']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="x" type="text" class="form-control" id="Twitter"
                                value="<?php echo $row['x']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="face" type="text" class="form-control" id="Facebook"
                                value="<?php echo $row['facebook']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="insta" type="text" class="form-control" id="Instagram"
                                value="https://instagram.com/#">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="link" type="text" class="form-control" id="Linkedin"
                                value="https://linkedin.com/#">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="save">Save Changes</button> <?php } ?>


                    </div>
                </form><!-- End Profile Edit Form -->
                <?php
                    if (isset($_POST['save'])) {



                        $name = $_POST["names"];
                        $image = $_FILES["image"]["name"];
                        $loc = $_FILES["image"]["tmp_name"];
                        $folder = "./image/" . $image;
                        move_uploaded_file($loc, $folder);

                        $email = $_POST["email"];
                        $about = $_POST['about'];
                        $location = $_POST["location"];
                        $phone = $_POST["phone"];
                        $headmaster = ['headmaster'];
                        $pobox = $_POST["pobox"];


                        $face = $_POST["face"];
                        $insta = $_POST["insta"];





                        $sql = "UPDATE `school_info` SET `name`='$name',`image`='$folder',`email`='$email',`about`='$about',`location`='$location',`phone`='$phone',`headmaster`='$headmaster',`pobox`='$pobox',`facebook`='$face',`instagram`='$insta'";


                        $res = mysqli_query($con, $sql);

                        if ($res) {
                    ?>
                <script>
                window.location.hreh = "./index.php"
                </script>
                <?php
                        } else {
                            echo "<h1>data do not inserted</h1>";
                        }
                    }

                    ?>

            </div>
        </div>


    </main>


    <footer id="footer" class="footer position-relative light-background">



        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">GS Des Parents</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://linktr.ee/gnintellex">GN IntelleX</a>
            </div>
        </div>

    </footer>

    <?php include('../component/footer.php') ?>
</body>

</html>