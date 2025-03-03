<?php include("./assets/components/head.php"); ?>
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-bread-title"><a href="#"><i
                                class="bi bi-home-alt fs-lg me-1"></i>Home</a></li>
                    <li class="breadcrumb-item  text-bread-title" aria-current="page">Archive</li>
                </ol>
            </nav>
            <style>
            .text-bread-title {
                font-weight: bold;
            }
            </style>
        </div>
    </div>
    <h5 class="text-center"> All school Archive</h5>
    <section id="gallery" class="gallery section">

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">


                <?php
        include('connect.php');

        $sql = "SELECT  `title`,  `image` FROM `school` ORDER BY id DESC  ";

        $query = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($query)) {
        ?>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="./Dashboard/admin/<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="./Dashboard/admin/<?php echo $row['image']; ?>"
                                title=" <?php echo $row['title']; ?>" class="glightbox preview-link"><i
                                    class="bi bi-arrows-angle-expand"></i></a>
                            </a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                <?php } ?>


            </div>

        </div>

    </section><!-- /Gallery Section -->

</main><!-- End #main --> <?php include("./assets/components/foot.php"); ?>
<style>
/*--------------------------------------------------------------
# Gallery Section
--------------------------------------------------------------*/
.gallery .gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}

.gallery .gallery-item img {
    transition: 0.3s;
}

.gallery .gallery-links {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: all ease-in-out 0.3s;
    background: rgba(0, 0, 0, 0.6);
    z-index: 3;
}

.gallery .gallery-links .preview-link,
.gallery .gallery-links .details-link {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.5);
    transition: 0.3s;
    line-height: 1.2;
    margin: 30px 8px 0 8px;
}

.gallery .gallery-links .preview-link:hover,
.gallery .gallery-links .details-link:hover {
    color: #ffffff;
}

.gallery .gallery-links .details-link {
    font-size: 30px;
    line-height: 0;
}

.gallery .gallery-item:hover .gallery-links {
    opacity: 1;
}

.gallery .gallery-item:hover .preview-link,
.gallery .gallery-item:hover .details-link {
    margin-top: 0;
}

.gallery .gallery-item:hover img {
    transform: scale(1.1);
}

.glightbox-clean .gslide-description {
    background: #272727;
}

.glightbox-clean .gslide-title {
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
}
</style>