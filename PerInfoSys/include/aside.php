<?php
session_start();

?>

<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
      <!-- ADMIN DASHBOARD -->
      <ul class="sidebar-menu" id="nav-accordion">

        <li>
          <a href="user_profile.php">
            <i class="fa fa-user"></i>
            <span>Profile</span>
          </a>
        </li>


        <li class="sub-menu">
          <a href="req_update.php">
            <i class="fa fa-tasks"></i>
            <span>Request Update</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="fa fa-user"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>


    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->