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
              Register Student
            </header>
            <div class="panel-body">
              <div class="position-center">
                <form role="form" action="connections/register_user.php" method="POST">
                  <div class="form-group">
                    <label for="Fname">First Name</label>
                    <input type="text" class="form-control" id="Fname" name="firstname" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="Lname">Last Name</label>
                    <input type="text" class="form-control" id="Lname" name="lastname" placeholder="Enter Lastname">
                  </div>
                  <div class="form-group">
                    <label>Gender:
                      <input list="gender" class="form-control" name="gender" /></label>
                    <datalist id="gender">
                      <option value="Male">
                      <option value="Female">
                    </datalist>
                  </div>
                  <div class="form-group">
                    <label for="mat_num">Matric Number</label>
                    <input type="text" class="form-control" name="mat_num" id="mat_num"
                      placeholder="Enter Matri Number">
                  </div>
                  <div class="form-group">
                    <label for="tel">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="tel" placeholder="Enter Phone Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pwd" id="exampleInputPassword1"
                      placeholder="Password">
                  </div>


                  <div class="checkbox">
                    <label>
                      <input type="checkbox">I agree to the Terms of Service and Privacy Policy
                    </label>
                  </div>
                  <button type="submit" class="btn btn-info">Submit</button>
                </form>
                <p>Already Registered? <a href="login.html">Login</a></p>
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