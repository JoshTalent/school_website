<?php include("./assets/components/head.php"); ?>
<main class="main pt-4" id="main">


    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-bread-title"><a href="#"><i
                                class="bi bi-home-alt fs-lg me-1"></i>Home</a></li>
                    <li class="breadcrumb-item  text-bread-title" aria-current="page">Documents</li>
                </ol>
            </nav>
            <style>
            .text-bread-title {
                font-weight: bold;
            }
            </style>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="container section-title" data-aos="fade-up">
                <h2>School Documents</h2>
                <p>Browse Available Documents</p>
            </div>
        </div>

        <div class="row g-4">
            <?php
            include('connect.php');

            $sql = "SELECT `id`, `title`, `discription`, `image` FROM `uploads` ORDER BY id DESC ";

            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-6 col-lg-4">
                <a href="view.php?get_id=<?php echo $row['id']?>" class="text-decoration-none">
                    <div class="card h-100 shadow-sm hover-shadow border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-file-earmark-text fs-2 text-primary me-3"></i>
                                <h5 class="card-title mb-0 text-dark"><?php echo $row['title']; ?></h5>
                            </div>
                            <p class="card-text text-muted mb-3"><?php echo substr($row['discription'], 0, 100); ?>...</p>
                            <button class="btn btn-outline-primary w-100">
                                <i class="bi bi-eye me-2"></i>View Document
                            </button>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <style>
    .posts {
        gap: 20px;
    }

    .link{
        background: linear-gradient(to right, aliceblue, #fff, aliceblue);
        font-weight: bold;
        padding: 20px;

    }
    </style>






</main> <?php include("./assets/components/foot.php"); ?>