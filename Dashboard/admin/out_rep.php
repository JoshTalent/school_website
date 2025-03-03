<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">



    <?php include('../component/dos_header.php'); ?>


    <main id="main" class="main">
        <h4 class="text-success text-center">Outside Messages</h4>
        <?php
        include('connect.php');

        $sql = "SELECT `id`,  `name`, `email`, `subject`, `message` FROM `dos_out_rep` ORDER BY id DESC";

        $query = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($query)) {
        ?>

        <div class="row gy-4 p-4 m-4">
            <div class="card pt-2 g-2">
                <div class="card-title">
                    <h4 class="text-center text-success"><?php echo $row['name']; ?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 ">
                            <h6 class="text-primary">
                                Subject
                            </h6>
                            <p>
                                <?php echo $row['subject']; ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-primary">Message</h6>
                            <p> <?php echo $row['message']; ?>
                            </p>

                        </div>
                        <div class="col-md-3">
                            <h6 class="text-primary">Email</h6>
                            <?php echo $row['email']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <a href="deleterep.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger"><i
                                class="bi bi-trash"></i>delete</a>
                    </div>
                </div>
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