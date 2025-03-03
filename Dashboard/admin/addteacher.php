<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">

    <?php include('../component/dos_header.php'); ?>

    <main id="main" class="main">
        <div class="container py-5 w">
            <h1>Add Staff Member</h1>

            <form class="p-md-5 border rounded-3 bg-body-tertiary" method="post" enctype="multipart/form-data">

                <!-- Name input -->

                <div class="form-floating mb-3">

                    <input type="text" id="form4Example1" class="form-control" name="names" required />

                    <label class="form-label" for="form4Example1">Name</label>

                </div>



                <!-- Email input -->

                <div class="form-floating mb-3">

                    <input type="email" id="form4Example2" class="form-control" name="email" required />

                    <label class="form-label" for="form4Example2">Email address</label>

                </div>


                <div class="form-floating mb-3">

                    <input type="number" id="form4Example2" class="form-control" name="phone" required />

                    <label class="form-label" for="form4Example2">phone number</label>

                </div>
                <div class="form-floating mb-3">

                    <select name="category" id="" class="form-control">
                        <option value="">Choose Category</option>
                        <option value="trainer">Trainer</option>
                        <option value="administrator">Adminisrator</option>
                    </select>
                    <label class="form-label" for="form4Example2">Staff Category</label>

                </div>



                <div class="form-floating mb-3">

                    <input type="radio" name="male" id="" value="male"> male
                    <input type="radio" name="male" id="" value="female"> female <br>
                    <hr>

                </div>

                <div class="form-floating mb-3">

                    <input type="file" id="form4Example2" class="form-control" name="image" required />

                    <label class="form-label" for="form4Example2">teacher image</label>

                </div>

                <div class="form-floating mb-3">

                    <input type="text" name="pro" class="form-control" id="">
                    <label class="form-label" for="form4Example2">Proffessional At</label>

                </div>


                <button type="submit" class="w-100 btn btn-lg btn-primary" name="save" onclick="name()">Add
                    Trainer</button>
                <?php
                $con = mysqli_connect("localhost", "root", "", "school");


                if (isset($_POST['save'])) {



                    $name = $_POST["names"];
                    $email = $_POST["email"];
                    $category = $_POST["category"];
                    $phone = $_POST["phone"];
                    $male = $_POST["male"];


                    $image = $_FILES["image"]["name"];
                    $loc = $_FILES["image"]["tmp_name"];

                    $folder = "./image/" . $image;
                    move_uploaded_file($loc, $folder);



                    $pro = $_POST["pro"];

                    $sql = "INSERT INTO `teachers`( `name`, `email`, `category`, `phone`, `gender`, `image`,`proffession`) VALUES ('$name','$email','$category','$phone','$male','$folder','$pro')";


                    $res = mysqli_query($con, $sql);

                    if ($res) {
                ?>
                <script>
                window.location.href = "./view.php"
                </script>
                <?php
                    } else {
                        echo "<h1>data do not inserted</h1>";
                    }
                }

                ?>
            </form>


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