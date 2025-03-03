<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php'); ?>

<body class="index-page">

    <?php include('../component/dos_header.php'); ?>
    <?php
    include('connect.php');

    if (isset($_GET['update_id'])) {
        $id = $_GET['update_id'];
    }

    ?>




<main id="main" class="main">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 ">
                <h1>Update School gallery</h1>
                <form class="p-md-5 border rounded-3 bg-body-tertiary " method="post" enctype="multipart/form-data">
                <?php 
                    
                    $sql = "SELECT * FROM `gallery` WHERE `id`='$id' ORDER BY `id` DESC";
                    
                    $check = mysqli_query($con , $sql);


                    while ($row = mysqli_fetch_array($check)) {
                        ?>

                    <!-- Name input -->

                    <div class="form-floating mb-3">

                        <input type="text" id="form4Example1" class="form-control" name="title" value="<?php echo $row['title'] ?>"/>

                        <label class="form-label" for="form4Example1" required>Tiltle</label>

                    </div>


                    <div class="form-floating mb-3">

                        <select name="type" id="" class="form-control" value="<?php echo $row['type'] ?>">
                            <option value="best">best performers</option>
                            <option value="gallery">gallery</option>
                            <option value="" selected>Choose type of gallery</option>
                        </select>

                        <label class="form-label" for="form4Example2">choose type of gallery</label>

                    </div>




                    <!-- Email input -->

                    <div class="form-floating mb-3">

                        <input type="file" id="form4Example2" class="form-control" name="thumbnail" value="<?php echo $row['thumbnail'] ?>" required />

                        <label class="form-label" for="form4Example2">Image In Thumbnail</label>

                    </div>



                    <!-- Message input -->

                    <div class="form-floating mb-3">

                        <input type="file" id="form4Example2" class="form-control" name="image" value="<?php echo $row['image'] ?>" />

                        <label class="form-label" for="form4Example2">Image</label>

                    </div>




                    <!-- Checkbox -->





                    <!-- Submit button -->
                     <?php } ?>

                    <button type="submit" class="w-100 btn btn-lg btn-primary" name="save">Update gallery</button>

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



                        $sql = "UPDATE `gallery` SET `title`='$tilte',`thumbnail`='$thumbimage',`type`='$type',`image`='$folder' WHERE `id`='$id'";


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