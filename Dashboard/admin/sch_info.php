<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">

    <?php include('../component/dos_header.php'); ?>


    <main id="main" class="main">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 ">
                <h1>Add School archive</h1>
                <form class="p-md-5 border rounded-3 bg-body-tertiary " method="post" enctype="multipart/form-data">

                    <!-- Name input -->

                    <div class="form-floating mb-3">

                        <input type="text" id="form4Example1" class="form-control" name="title" />

                        <label class="form-label" for="form4Example1" required>tiltle</label>

                    </div>




                    <!-- Message input -->

                    <div class="form-floating mb-3">

                        <input type="file" id="form4Example2" class="form-control" name="image" />

                        <label class="form-label" for="form4Example2">image</label>

                    </div>




                    <!-- Checkbox -->





                    <!-- Submit button -->

                    <button type="submit" class="w-100 btn btn-lg btn-primary" name="save">Add Archieve</button>

                    <?php



                    if (isset($_POST['save'])) {
                        include('connect.php');


                        $tilte = $_POST["title"];

                        $ifoto = $_FILES["image"]["name"];
                        $loc = $_FILES["image"]["tmp_name"];

                        $folder = "./image/" . $ifoto;

                        move_uploaded_file($loc, $folder);



                        $sql = "INSERT INTO `school`( `title`, `image`) VALUES ('$tilte','$folder')";


                        $res = mysqli_query($con, $sql);

                        if ($res) {
                    ?>
                    <script>
                  alert("Data Inserted Successfully")
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