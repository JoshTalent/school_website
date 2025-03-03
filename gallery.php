<?php include 'connect.php' ?>
<?php include("./assets/components/head.php"); ?> 
<main class="main" id="main">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-bread-title"><a href="#"><i
                                class="bi bi-home-alt fs-lg me-1"></i>Home</a></li>
                    <li class="breadcrumb-item  text-bread-title" aria-current="page">Gallery</li>
                </ol>
            </nav>
            <style>
            .text-bread-title {
                font-weight: bold;
            }
            </style>
        </div>
    </div>
    <section id="team" class="team section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Best Ones</h2>
            <p>Check Our Best Performers</p>
        </div>
        <div class="container">

            <div class="row">

                <!-- Gallery grid with gutters -->
                <div class="gallery row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mb-4" data-video="true">

                    <?php 
                    
                    $sql = "SELECT * FROM `gallery` ORDER BY `id` DESC";
                    
                    $check = mysqli_query($con , $sql);


                    while ($row = mysqli_fetch_array($check)) {
                        $categ = $row['type'];
                        if ($categ  == "best") {

                        ?>
                    <!-- Item -->
                    <div class="col-md-4">
                        <a href="./Dashboard/admin/<?php echo $row['image']; ?>"
                            class="gallery-item video-item rounded-3"
                            data-sub-html='<h6 class="fs-sm text-light">Gallery image caption</h6>'>
                            <img src="./Dashboard/admin/<?php echo $row['thumbnail']; ?>" alt="Gallery thumbnail"
                                class="image-thumb">
                            <div class="gallery-item-caption fs-sm fw-medium text-black text-center textone" class="thum-title">
                               <span><?php echo $row['title']; ?></span> 
                            </div>
                        </a>
                    </div>


                    <?php } } ?>


                    <!-- Add as many items as you need -->
                </div>

            </div>

         </div>
        <!-- End Section Title -->

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Checkout Our Gallery</p>
        </div>
        <!-- End Section Title -->


        <div class="container">

            <div class="row">

                <!-- Gallery grid with gutters -->
                <div class="gallery row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" data-video="true">

                    <?php 
                    
                    $sql = "SELECT * FROM `gallery` ORDER BY `id` DESC";
                    
                    $check = mysqli_query($con , $sql);


                    while ($row = mysqli_fetch_array($check)) {
                        $categ = $row['type'];
                        if ($categ  == "gallery") {
    
                        ?>
                    <!-- Item -->
                    <div class="col-md-4">
                        <a href="./Dashboard/admin/<?php echo $row['image']; ?>"
                            class="gallery-item video-item rounded-3"
                            data-sub-html='<h6 class="fs-sm text-light">Gallery image caption</h6>'>
                            <img src="./Dashboard/admin/<?php echo $row['thumbnail']; ?>" alt="Gallery thumbnail"
                                class="image-thumb">
                            <div class="gallery-item-caption fs-sm fw-medium text-black text-center" class="thum-title">
                                <?php echo $row['title']; ?>
                            </div>
                        </a>
                    </div>


                    <?php } } ?>


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

        <?php include("./assets/components/foot.php"); ?>
    </section>
</main>