<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">


    <?php include('../component/dos_header.php'); ?>

    <main id="main" class="main">

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 ">
                    <h1 class="text-primary text-center">View Trainer</h1>


                    <?php
                    include('connect.php');

                    $sql = "SELECT `id`, `name`, `email`, `category`,`phone`, `gender`,`image`,`proffession`FROM `teachers` ORDER BY id DESC";

                    $query = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                    <div class="cardes">
                        <img src="<?php echo $row['image']; ?>" alt="" srcset="" height="300px" width="300">
                        <h4><?php echo $row['name']; ?></h4>
                        <p><?php echo $row['proffession'] ?></p>
                        <div class="btn">
                            <a href="update.php?update_id= <?php echo $row['id']; ?>" class="btn btn-info m-2"><i
                                    class="bi bi-pencil-square"></i>Edit</a><a
                                href="delete.php?delete_id= <?php echo $row['id']; ?>" class="btn btn-danger m-2"><i
                                    class="bi bi-trash"></i>Delete</a>
                        </div>
                    </div>
                    <?php } ?>



                </div>
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