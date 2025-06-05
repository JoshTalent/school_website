<?php
session_start();
if (!isset($_SESSION['email'])) {
  ?>
   <script>
    window.location.href = '../../login.php'
   </script>
  <?php
}
?>
 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <span class="d-none d-lg-block">GSP</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->


<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">
    <li class="nav-item dropdown pe-3">
    <?php
        include('../component/connection.php');

        $sql = "SELECT `name`,`image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked` FROM `school_info`";

        $query = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($query)) {
        ?>
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="<?php echo $row['image']; ?>" alt="Profile" style="border-radius:100%;">
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $row['name']; ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $row['name']; ?></h6>
          <span>School Admin</span>
        </li>
        <li>
          <?php }?>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        

        <li>
          <a class="dropdown-item d-flex align-items-center" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Manage User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-stuff.php">
              <i class="bi bi-circle"></i><span>Add Stuff Member</span>
            </a>
          </li>
          <li>
            <a href="overview-user.php">
              <i class="bi bi-circle"></i><span>View Stuff</span>
            </a>
          </li>
        </ul>
      </li><!-- End Manager Userw Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-navs" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-image"></i><span>Manage Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navs" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-gallery.php">
              <i class="bi bi-circle"></i><span>Add School Gallery</span>
            </a>
          </li>
          <li>
            <a href="overview-gallery.php">
              <i class="bi bi-circle"></i><span>OverView Gallery</span>
            </a>
          </li>
        </ul>
      </li><!-- End Manager Gallery Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#documents" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-pdf"></i><span>Documents</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="documents" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-documents.php">
              <i class="bi bi-circle"></i><span>Add Documents</span>
            </a>
          </li>
          <li>
            <a href="overview-documents.php">
              <i class="bi bi-circle"></i><span>OverView Documents</span>
            </a>
          </li>
        </ul>
      </li><!-- End Manager Gallery Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#publication" data-bs-toggle="collapse" href="#">
          <i class="bi bi-newspaper"></i><span>Publication</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="publication" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="archives.php">
              <i class="bi bi-circle"></i><span>School Archive</span>
            </a>
          </li>
          <li>
            <a href="school-notification.php
            ">
              <i class="bi bi-circle"></i><span>School Notification</span>
            </a>
          </li>
        </ul>
      </li><!-- End Piblication Nav -->
    
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="report.php">
          <i class="bi bi-question-circle"></i>
          <span>Outside Reports</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->


   
    </ul>

  </aside><!-- End Sidebar-->