<?php
	include_once 'include/header.php';
?>
<?php
	include_once 'include/aside.php';
?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="form-w3layouts">
      <!-- page start-->
      <!-- page start-->
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              User Login
            </header>
            <div class="panel-body">
              <div class="position-center">
                <form action="connections/login.php" method="POST" role=" form">
                  <div class="form-group">
                    <label for="user">Username</label>
                    <input type="email" class="form-control" name="uid" id="user" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pass" id="exampleInputPassword1"
                      placeholder="Password">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
                  </div>
                  <button type="submit" class="btn btn-info">Submit</button>
                </form>
              </div>

            </div>
          </section>


          <!-- footer -->
          <?php
    include_once 'include/footer.php';
  ?>
          <!-- / footer -->
  </section>

  <!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>

</html>