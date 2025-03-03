<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">


    <?php include('../component/dos_header.php'); ?>

    <main id="main" class="main">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 ">
                <h1 class="text-info">View Students</h1>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">first_name</th>
                            <th scope="col">last_name</th>
                            <th scope="col">class</th>
                            <th scope="col">email</th>
                            <th scope="col">address</th>
                            <th scope="col">gender</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        include 'connect.php';

                        $sql = "SELECT `id`,`f_name`, `l_name`, `class`, `email`, `address`, `gender`, `password` FROM `students` ORDER BY id DESC";

                        $query = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td scope="col"><?php echo $row['id']; ?></td>
                            <td scope="col"><?php echo $row['f_name']; ?></td>
                            <td scope="col"><?php echo $row['l_name']; ?></td>
                            <td scope="col"><?php echo $row['class']; ?></td>
                            <td scope="col"><?php echo $row['email']; ?></td>
                            <td scope="col"><?php echo $row['address']; ?></td>
                            <td scope="col"><?php echo $row['gender']; ?></td>
                        </tr>
                        <?php
                        }


                        ?>
                    </tbody>
                </table>
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