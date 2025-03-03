<footer id="footer" class="footer position-relative light-background">
    <?php
    include('connect.php');

    $sql = "SELECT `name`,`image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked` FROM `school_info`";

    $query = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($query)) {
    ?>
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.php" class="logo d-flex align-items-center">
                    <span class="sitename">GS Des Parents</span>
                </a>
                <div class="footer-contact pt-3">
                    <p> <?php echo $row['location']; ?></p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+250 <?php echo $row['phone']; ?></span></p>
                    <p><strong>Email:</strong> <span><?php echo $row['email']; ?></span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href="<?php echo $row['x']; ?>"><i class="bi bi-twitter-x"></i></a>
                    <a href="<?php echo $row['facebook']; ?>"><i class="bi bi-facebook"></i></a>
                    <a href="<?php echo $row['instagram']; ?>"><i class="bi bi-instagram"></i></a>
                    <a href="<?php echo $row['linked']; ?>"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutphp.">About us</a></li>
                    <li><a href="course.php">Course</a></li>
                    <li><a href="events">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Software Development</a></li>
                    <li><a href="#">Electronic and Telecommunication</a></li>
                    <li><a href="#">Accounting</a></li>
                    <li><a href="#">Computer System and Architecture</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">GS Des Parents</strong> <span>All Rights
                Reserved</span></p>
        <div class="credits">
            Powered by <a href="https://gnintellex.netlify.app">GN IntelleX</a>
        </div>
    </div>
    <?php } ?>
</footer>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>


<script src="../../assets/files/lightgallery/lightgallery.min.js"></script>
<script src="../../assets/files/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
<script src="../../assets/files/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
<script src="../../assets/files/lightgallery/plugins/video/lg-video.min.js"></script>
<script src="../../assets/files/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="../../assets/files/swiper/swiper-bundle.min.js"></script>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>