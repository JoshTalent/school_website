<?php include("./assets/components/head.php"); ?>
<main class="main">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-bread-title"><a href="#"><i
                                class="bi bi-home-alt fs-lg me-1"></i>Home</a></li>
                    <li class="breadcrumb-item  text-bread-title" aria-current="page">About</li>
                </ol>
            </nav>
            <style>
            .text-bread-title {
                font-weight: bold;
            }
            </style>
        </div>
    </div>


    <div class="row animation">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="./used/ab-4.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./used/next.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./used/post.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./used/school.PNG" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <style>
    .animation img {
        min-height: 580px;
        max-height: 600px;
        object-fit: cover;
        min-height: 500px;

    }
    </style>
    <!-- About Us Section -->
    <section id="about-us" class="section about-us">

        <div class="container">

            <div class="row gy-4">
                <?php
                include('connect.php');

                $sql = "SELECT `name`,`image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked` FROM `school_info`";

                $query = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="./Dashboard/admin/<?php echo $row['image']; ?>" class="img-fluid about_image" alt="">

                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>About Us</h3>
                    <p class="fst-italic">
                        <?php echo $row['about']; ?>
                    </p>
                    <div class="row d-flex flex-column g-2">
                        <!-- Basic card example -->
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <!-- Default card hover effect -->
                    <div class="card card-hover">
                        <div class="card-body ">
                            <h5 class="card-title about_card_title">Mission</h5>
                            <p class="card-text fs-sm about_card_text">Is purely to produce and deliver competitive on
                                the market</p>
                            <a href="#" class="btn btn-sm btn-primary"></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <!-- Default card hover effect -->
                    <div class="card card-hover">
                        <div class="card-body">
                            <h5 class="card-title about_card_title">Our Visions</h5>
                            <p class="card-text fs-sm about_card_text">To transform our school into excellent and high
                                standard center for proffesiional and technical delivery in southern province</p>
                            <a href="#" class="btn btn-sm btn-primary"></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <!-- Default card hover effect -->
                    <div class="card card-hover">
                        <div class="card-body">
                            <h5 class="card-title about_card_title">Our Values</h5>
                            <p class="card-text fs-sm about_card_text">Excellence , Conscicusness and patriotism</p>
                            <a href="#" class="btn btn-sm btn-primary"></a>
                        </div>
                    </div>

                </div>
            </div>

    </section><!-- /About Us Section -->
    <style>
    .card {
        border: 1px solid rgba(0, 0, 0, 0.169);
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0);
    }

    .about_card_title {
        font-weight: bolder;
    }

    .about_card_text {
        color: hsla(0, 0%, 0%, 0.352);
    }

    .about_image {
        max-width: 650px;
        width: 100%;
    }
    </style>

    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="532" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Students</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Courses</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Events</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Trainers</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Counts Section -->
</main>
<?php include("./assets/components/foot.php"); ?>