<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">

    <?php include('../component/dos_header.php'); ?>


    <main id="main" class="main">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 ">
                <h1>Add School gallery</h1>
                <form class="p-md-5 border rounded-3 bg-body-tertiary " method="post" enctype="multipart/form-data">

                    <!-- Name input -->

                    <div class="form-floating mb-3">

                        <input type="text" id="form4Example1" class="form-control" name="title" />

                        <label class="form-label" for="form4Example1" required>Tiltle</label>

                    </div>


                    <div class="form-floating mb-3">

                        <select name="type" id="" class="form-control">
                            <option value="best">best performers</option>
                            <option value="gallery">gallery</option>
                            <option value="" selected>Choose type of gallery</option>
                        </select>

                        <label class="form-label" for="form4Example2">choose type of gallery</label>

                    </div>




                    <!-- Email input -->

                    <div class="form-floating mb-3">

                        <input type="file" id="form4Example2" class="form-control" name="thumbnail" required />

                        <label class="form-label" for="form4Example2">Image In Thumbnail</label>

                    </div>



                    <!-- Message input -->

                    <div class="form-floating mb-3">

                        <input type="file" id="form4Example2" class="form-control" name="image" />

                        <label class="form-label" for="form4Example2">Image</label>

                    </div>




                    <!-- Checkbox -->





                    <!-- Submit button -->

                    <button type="submit" class="w-100 btn btn-lg btn-primary" name="save">Add gallery</button>

                    <?php



                    if (isset($_POST['save'])) {
                        include('connect.php');


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
                    window.location.href = "./gallery.php";
                    </script>
                    <?php
                        } else {
                            echo "<h1>data do not inserted</h1>";
                        }
                    }

                    ?>

                </form>
            </div>
        </div>

    </main><!-- End #main -->



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