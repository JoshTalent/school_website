<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">

    <?php include('../component/dos_header.php'); ?>

    <main class="main pt-4" id="main">

        <div class="container">
            <div class="row ">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Uploaded Documents</h2>
                    <p>School Documents</p>
                </div><!-- End Section Title -->
            </div> <!-- Button trigger modal -->

            <div class="row posts">
                <?php
                include('connect.php');

                $sql = "SELECT `id`, `title`, `discription`, `image` FROM `uploads` ORDER BY id DESC ";

                $query = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_array($query)) {
                ?>
                <button type="button" class="btn uplaods_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <?php echo $row['title']; ?>
                </button>
                <!-- Modal -->
                <div class=" modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $row['title']; ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <embed src="<?php echo $row['image']; ?>" type="" width="100%">
                                    </div>

                                    <div class="col-md-12">
                                        <?php echo $row['discription']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="delete_doc.php?delete_id= <?php echo $row['id']; ?>" class="btn btn-danger"><i
                                        class="bi bi-trash"></i>delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <style>
            .posts {
                gap: 20px;
            }

            .uplaods_btn {
                background: linear-gradient(to right, aliceblue, #fff, aliceblue);
                font-weight: bold;
                padding: 20px;

            }
            </style>





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