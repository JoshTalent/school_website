<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../../login.php"); // Redirect to login if not logged in
    exit();
}
?>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.php" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">GSP</h1>

        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php" class="active">Dashboard<br></a></li>
                <li class="dropdown"><a href="#"><span>Manager Users</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="addteacher.php">Add Staff Member</a></li>
                        <li><a href="view.php">View Staff </a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Gallery</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="gallery.php">View Gallery</a></li>
                    <li><a href="add_gallery.php">Add Gallery</a></li>
                  </ul>
            
                </li>
                <li class="dropdown"><a href="#"><span>Publications</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="sch_info.php">School Archive<i class="bi bi-archive"></i></a></li>
                        <li><a href="st_info.php">School Notification<i class="bi bi-bell"></i></a></li>
                        <li class="dropdown"><a href="#"><span>Documents</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                            <ul>
                                <li><a href="uploads.php">Add Documents<i class="bi bi-bell"></i></a></li>
                                <li><a href="view_uploads.php">view Documents<i class="bi bi-archive"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Account</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown"><a href=""><span>Profile</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="profile.php">view school profile</a></li>
                                <li><a href="ed_profile.php">Edit Profile</a></li>
                                <li><a href="ed_pass.php">Change password</a></li>
                            </ul>
                        </li>
                        <li><a href="out_rep.php">Outside Reports</a></li>
                        <li><a href="logout.php">Log Out <i class="bi bi-box-arrow-right"></i></a></li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>



    </div>
</header>