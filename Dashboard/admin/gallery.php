<!DOCTYPE html>
<html lang="en">
    <?php   include('connect.php'); ?>

<?php include('../component/head.php') ?>

<body class="index-page">


    <?php include('../component/dos_header.php'); ?>

    <main class="main" id="main">
    <section id="team" class="team section">
      
        <div class="container">

            <div class="row">
                <h3 class="text-center">View Gallery And Modify It</h3>

                <!-- Gallery grid with gutters -->
                <div class="gallery row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mb-4" data-video="true">

                    <?php 
                    
                    $sql = "SELECT * FROM `gallery` ORDER BY `id` DESC";
                    
                    $check = mysqli_query($con , $sql);


                    while ($row = mysqli_fetch_array($check)) {
                        ?>
                    <!-- Item -->
                    <div class="col-md-4">
                        <a href="<?php echo $row['image']; ?>"
                            class="gallery-item video-item rounded-3"
                            data-sub-html='<h6 class="fs-sm text-light">Gallery image caption</h6>'>
                            <img src="<?php echo $row['thumbnail']; ?>" alt="Gallery thumbnail"
                                class="image-thumb">
                            <div class="gallery-item-caption fs-sm fw-medium text-black text-center textone" class="thum-title">
                               <span class="text-black"><?php echo $row['title']; ?></span> 
                               <div class="row d-flex justify-content-center p-4">
                                <button class="btn col-6 btn-danger">
                                    <a href="delete_gallery.php?delete_id=<?php echo $row['id']; ?>" class="text-white">
                                        delete
                                    </a>
                                </button>
                                <button class="btn col-6 btn-success">
                                    <a href="update_gallery.php?update_id=<?php echo $row['id']; ?>" class="text-white">
                                        update
                                    </a>
                                </button>
                               </div>
                            </div>
                        </a>
                    </div>


                    <?php }  ?>


                    <!-- Add as many items as you need -->
                </div>

            </div>

         </div>
        <style>
        .image-thumb {
            width: 400px;
            height: 300px;
            border-radius: 20px;
            object-fit: cover;
        }
        </style>
    </section>
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