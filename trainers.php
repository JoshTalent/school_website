<?php include("./assets/components/head.php"); ?>
<main class="main" id="main">
    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-bread-title"><a href="#"><i
                                    class="bi bi-home-alt fs-lg me-1"></i>Home</a></li>
                        <li class="breadcrumb-item  text-bread-title" aria-current="page">Administrators</li>
                    </ol>
                </nav>
                <style>
                .text-bread-title {
                    font-weight: bold;
                }
                </style>
            </div>
        </div>

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Adminisrators</h2>
            <p>our Adminisrators</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row d-flex justify-content-center">
                <?php
                include('connect.php');

                $sql = "SELECT `id`, `name`, `email`, `category`, `gender`,`phone`,`image`,`proffession`FROM `teachers` ";

                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($query)) {

                    $categ = $row['category'];
                    if ($categ  == "administrator") {


                ?>

                <div class="cardes">
                    <img src="./Dashboard/admin/<?php echo $row['image']; ?>" alt="" srcset="" height="300px"
                        width="300px">
                    <h4><?php echo $row['name']; ?></h4>
                    <p><?php echo $row['proffession'] ?></p>
                    <p>+250<?php echo $row['phone'] ?></p>

                </div>
                <?php }
                } ?>


                <div class="container section-title" data-aos="fade-up">
                    <h2>Trainers</h2>
                    <p>Check Our Trainers</p>
                </div><!-- End Section Title -->
                <?php

                $sql = "SELECT * FROM `teachers`";

                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($query)) {

                    $cate = $row['category'];
                    if ($cate  == "trainer") {


                ?>

                <div class="cardes">
                    <img src="./Dashboard/admin/<?php echo $row['image']; ?>" alt="" srcset="" height="300px"
                        width="300px">
                    <h4><?php echo $row['name']; ?></?>
                    </h4>
                    <p><?php echo $row['proffession'] ?></p>
                    <p>+250<?php echo $row['phone'] ?></p>

                </div>
                <?php }
                } ?>




            </div><!-- End Team Member -->
        </div>

        </div>
    </section><!-- /Team Section -->


</main>
<style>
.cardes {
    border: 1px solid rgba(0, 0, 0, 40%);
    max-width: fit-content;
    border-radius: 20px;
    margin: 20px;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.155);
    padding-bottom: 20px;
    padding-top: 10px;
}

.cardes img {
    padding: 0;
    border-radius: 10px;
    object-fit: cover;
}

.cardes h4 {
    font-family: arial, sans-serif;
    font-size: large;
    text-align: center;
    padding: 0;
    font-weight: bold;
}

.cardes p,
h5 {
    color: rgba(0, 0, 0, 0.493);
    font-family: arial, sans-serif;
    text-align: center;
    padding: 0;
}

.cardes .btn {
    width: 100%;
    display: flex;
    justify-content: space-around;
}

.cardes .btn button {
    width: 40%;
    padding: 10px 30px;
    border: none;
    color: white;
    border-radius: 7px;
}

.cardes .btn button:first-child {
    background-color: red;
}

.cardes .btn button:last-child {
    background-color: green;
}
</style>
<?php include("./assets/components/foot.php"); ?>