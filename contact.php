<?php include("./assets/components/head.php"); ?>
<main class="main">
    <!-- Home icon + text -->
    <div class="container">

        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-bread-title"><a href="#"><i
                                class="bi bi-home-alt fs-lg me-1"></i>Home</a></li>
                    <li class="breadcrumb-item  text-bread-title" aria-current="page">Contact</li>
                </ol>
            </nav>
            <style>
            .text-bread-title {
                font-weight: bold;
            }
            </style>
        </div>

        <div class="row">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4421.679827929996!2d29.747805210979074!3d-2.590967697376191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c30cfb97000001%3A0xf0b8a4f71069ec82!2sEcole%20Secondaire%20Des%20Parent%20De%20Butare!5e1!3m2!1sen!2srw!4v1740497545315!5m2!1sen!2srw"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div class="container section-title p-4" data-aos="fade-up">
        <h2>Get intouch</h2>
        <p>Contact US</p>
    </div><!-- End Section Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p> SH 4 Avenue, Butare, Rwanda</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>gsphuye@yahoo.fr</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form method="post" class="form needs-validation" data-aos="fade-up" data-aos-delay="200" novalidate>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control shadow-sm" id="floatingName" placeholder="Your Name" required>
                                    <label for="floatingName">Your Name</label>
                                    <div class="invalid-feedback">Please enter your name</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control shadow-sm" name="email" id="floatingEmail" placeholder="Your Email" required>
                                    <label for="floatingEmail">Your Email</label>
                                    <div class="invalid-feedback">Please enter a valid email</div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control shadow-sm" name="subject" id="floatingSubject" placeholder="Subject" required>
                                    <label for="floatingSubject">Subject</label>
                                    <div class="invalid-feedback">Please enter a subject</div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control shadow-sm" name="message" id="floatingMessage" style="height: 150px" placeholder="Message" required></textarea>
                                    <label for="floatingMessage">Message</label>
                                    <div class="invalid-feedback">Please enter your message</div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" name="save" class="btn btn-primary btn-lg px-5 py-3 shadow">
                                    <i class="bi bi-send me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "school");


                        if (isset($_POST['save'])) {



                            $name = $_POST["name"];
                            $email = $_POST["email"];
                            $sub = $_POST["subject"];
                            $message = $_POST["message"];

                            $sql = "INSERT INTO `report`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$sub','$message')";


                            $res = mysqli_query($con, $sql);

                            if ($res) {
                        ?>
                        <script>
                        alert("Your message sent")
                        window.location.href = "contact.php"
                        </script>
                        <?php
                            } else {
                                echo "<h1>data do not inserted</h1>";
                            }
                        }

                        ?>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>
<?php include("./assets/components/foot.php"); ?>