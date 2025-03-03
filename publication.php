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
        <div class="row ">
            <div class="container section-title" data-aos="fade-up">
                <h2>Uploaded Documents</h2>
                <p>School Documents</p>
            </div><!-- End Section Title -->
        </div> <!-- Button trigger modal -->
        <main class="main pt-4" id="main">

    <div class="row posts">
        <?php
        include('connect.php');

        $sql = "SELECT `id`, `title`, `discription`, `image` FROM `uploads` ORDER BY id DESC ";

        $query = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($query)) {
        ?>
        <a href="view.php?get_id=<?php echo $row['id']?>" class=" text-black link">
            <button type="button" class="btn col-12 uplaods_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <?php echo $row['title']; ?>
            </button>
        </a>
        <?php } ?>
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