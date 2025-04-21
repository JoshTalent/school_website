<?php include("./assets/components/head.php"); ?>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="./Dashboard/admin/image/back.jpeg" alt="" data-aos="fade-in">

        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100">Learning Today,<br>Leading Tomorrow</h2>
            <p data-aos="fade-up" data-aos-delay="200">Education Is Our Passport To The Future, Belongs To The
                People Who Prepare To Day.</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                <a href="contact.php" class="btn-get-started">Get Intouch</a>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <?php
    include('connect.php');

    $sql = "SELECT `name`,`image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked` FROM `school_info`";

    $query = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($query)) {
    ?>
    <!-- About Us Section -->
    <section id="about-us" class="section about-us">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="./Dashboard/admin/<?php echo $row['image']; ?>" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>About Us</h3>
                    <p class="fst-italic">
                        <?php echo $row['about']; ?>
                    </p>
                </div>

            </div>

        </div>
        <?php } ?>
    </section><!-- /About Us Section -->

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
    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-box">
                        <h3>Why Choose Our School?</h3>
                        <p>
                            "Join a school where your future takes center stage! At <span class="">GS DES
                                PARENTS</span>, we’re committed to more than just academics—we’re dedicated to
                            shaping leaders and innovators. With small class sizes and personalized support, you’ll
                            receive the attention you need to excel in your studies and pursue your passions. Our
                            diverse range of extracurricular activities, state-of-the-art facilities, and
                            cutting-edge programs ensure that every student finds their path to success. Plus, our
                            strong network of alumni and partnerships with top universities means endless
                            opportunities for your next steps. Take the first step toward an exceptional
                            education—discover your potential with us!"
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-xl-4">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-lightbulb"></i>
                                <h4>Innovation & Creative</h4>
                                <p>Innovation and creativity mean pushing boundaries, thinking outside the box, and
                                    creating new solutions to today’s challenges. It's about harnessing fresh ideas
                                    and bold thinking to improve, evolve, and inspire. Whether developing unique
                                    approaches in technology, arts, or business, innovation and creativity drive
                                    progress and open doors to endless possibilities.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-person-workspace"></i>
                                <h4>Training</h4>
                                <p>Trainings are structured programs designed to build skills, knowledge, and
                                    expertise in specific areas. Through hands-on practice, expert guidance, and
                                    real-world applications, trainings equip individuals with the tools they need to
                                    succeed in their roles or personal goals. They foster growth, boost confidence,
                                    and enable continuous improvement, helping people stay competitive and capable
                                    in a fast-evolving world.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-book"></i>
                                <h4>High Education Support</h4>
                                <p>High Education Support refers to the resources and assistance provided to
                                    students pursuing higher education, ensuring they succeed academically and
                                    personally. This support can include academic advising, mentorship programs,
                                    financial aid, career counseling, and access to learning tools. By offering
                                    these resources, institutions empower students to overcome challenges, achieve
                                    their goals, and make the most of their educational experience.</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Why Us Section -->


    <!-- Courses Section -->
    <section id="courses" class="courses section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Courses</h2>
            <p>Popular Courses</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <img src="assets/img/elect.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Electronic and Telecommunication</p>
                            </div>

                            <h3><a href="">L3 - L5</a></h3>
                            <p class="description">Electronics and Telecommunication Engineering focuses on designing
                                and maintaining electronic systems and communication networks. It covers circuit design,
                                signal processing, wireless communication, and more. This field drives advancements in
                                mobile networks, satellites, and automation, preparing students for careers in
                                telecommunications, robotics, and networking.</p>

                        </div>
                    </div>
                </div> <!-- End Course Item-->



                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Software Development</p>
                            </div>

                            <h3><a href="">L3 - L5</a></h3>
                            <p class="description">Software Development focuses on designing, coding, testing, and
                                maintaining applications and systems. It covers programming languages, databases,
                                software engineering, and cybersecurity. This field drives innovation in web, mobile,
                                and AI-driven applications, preparing students for careers in software engineering, app
                                development, and system design.</p>

                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="course-item">
                        <img src="assets/img/csa.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Computer System and Architecture</p>
                            </div>

                            <h3><a href="">L3 - L5</a></h3>
                            <p class="description">Computer Systems and Architecture focuses on the design,
                                organization, and functionality of computer hardware and software. It covers processors,
                                memory management, operating systems, and networking. This field is essential for
                                optimizing computing performance, preparing students for careers in hardware design,
                                system engineering, and embedded systems.</p>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="course-item">
                        <img src="assets/img/acc.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Accounting</p>
                            </div>

                            <h3><a href="">S4 - S6</a></h3>
                            <p class="description">Accounting focuses on recording, analyzing, and managing financial
                                transactions for businesses and individuals. It covers financial reporting, auditing,
                                taxation, and cost management. This field ensures financial accuracy and compliance,
                                preparing students for careers in auditing, finance, and corporate accounting.</p>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

            </div>

        </div>
    </section>
    <section id="courses" class="courses section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Development Team</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <!-- Team Style 2: Vertical -->
                <div class="card col-md-4 card-body card-hover bg-light border-0 text-center">
                    <img src="./Dashboard/admin/image/josh.jpg" class="d-block rounded-circle mx-auto mb-3" width="162"
                        alt="Cameron Williamson">
                    <h5 class="fw-medium fs-lg mb-1">Josue NTWARI</h5>
                    <p class="fs-sm mb-3">Backend Developer & Director</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-icon btn-outline-secondary btn-facebook btn-sm me-2">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-outline-secondary btn-dribbble btn-sm me-2">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-outline-secondary btn-linkedin btn-sm">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
                <!-- Team Style 2: Vertical -->
                <div class="card col-md-4 card-body card-hover bg-light border-0 text-center">
                    <img src="./Dashboard/admin/image/pazz.jpg" class="d-block rounded-circle mx-auto mb-3" width="162"
                        alt="Cameron Williamson">
                    <h5 class="fw-medium fs-lg mb-1">Jean Marie GATARE </h5>
                    <p class="fs-sm mb-3">Frontend Develeper & Manager</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-icon btn-outline-secondary btn-facebook btn-sm me-2">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-outline-secondary btn-dribbble btn-sm me-2">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-outline-secondary btn-linkedin btn-sm">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Courses Section -->



    </section><!-- /Courses Section -->
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
                    <form method="post" class="form" data-aos="fade-up" data-aos-delay="200" action="">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">

                                <button type="submit" name="save" class="btn btn-primary rounded-4">Send
                                    Message</button>
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