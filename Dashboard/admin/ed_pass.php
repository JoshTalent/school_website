<!DOCTYPE html>
<html lang="en">

<?php include('../component/head.php') ?>

<body class="index-page">

    <?php include('../component/dos_header.php'); ?>

    <main class="main" id="main">
        <h2 class="text-center p-4"><b>Change school password</b></h2>
        <div class="row d-flex justify-content-center" id="profile-change-password">
            <!-- Change Password Form -->
            <div class="col-md-5">

                <form method="post">
                    <?php
                    include('connect.php');

                    $sql = "SELECT `password` FROM `school_info`";

                    $query = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                    <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control" id="currentPassword"
                                placeholder="<?php echo $row['password'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="save">Change Password</button>
                    </div>
                    <?php } ?>
                </form><!-- End Change Password Form -->
            </div>


        </div>
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
<?php
if (isset($_POST['save'])) {




    $link = $_POST["password"];
    $pro = md5($_POST["newpassword"]);


    $sql = "UPDATE `school_info` SET `password`='$pro'";


    $res = mysqli_query($con, $sql);

    if ($res) {
?>

<script>
alert("Thanks for changing school password")
window.location.hreh = "./index.php"
</script>
<?php
    } else {
        echo "<h1>data do not inserted</h1>";
    }
}

?>