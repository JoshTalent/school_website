<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">

    <?php include('../component/dos_header.php'); ?>



    <main id="main" class="main">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 ">
                <h1>Send Notifications</h1>
                <form class="p-md-5 border rounded-3 bg-body-tertiary" method="post">

                    <!-- Name input -->

                    <div class="form-floating mb-3">

                        <input type="text" id="form4Example1" class="form-control" name="title" required />

                        <label class="form-label" for="form4Example1">tiltle</label>

                    </div>



                    <!-- Email input -->

                    <div class="form-floating mb-3">

                        <input type="text" id="form4Example2" class="form-control" name="notification" required />

                        <label class="form-label" for="form4Example2">Notification</label>

                    </div>




                    <!-- Checkbox -->





                    <!-- Submit button -->

                    <button type="submit" class="w-100 btn btn-lg btn-primary" name="save">Send Notifications</button>

                    <?php



                    if (isset($_POST['save'])) {
                        include('connect.php');


                        $tilte = $_POST["title"];
                        $des = $_POST["notification"];
                        // $location = $_POST["location"];


                        $sql = "INSERT INTO `st_info`( `title`, `notification`) VALUES ('$tilte','$des')";


                        $res = mysqli_query($con, $sql);

                        if ($res) {
                    ?>
                    <script>
                    window.location.href = "./index.php";
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