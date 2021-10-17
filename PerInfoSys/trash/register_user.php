<?php
	include_once 'include/header.php';
	include_once 'include/aside.php';
  include_once 'connections/dbh.inc.php';

  $first = ($_POST['firstname']);
  $last = ($_POST['lastname']);
  $gender = ($_POST['gender']);
  $email = ($_POST['uname']);
  $mat_num = ($_POST['mat_num']);
  $phone = ($_POST['phone']);
  $pwd = ($_POST['pwd']);
  
  $sql = "INSERT INTO users (firstname, lastname, matric_number, email, phone, gender, pwd) VALUES ('$first', '$last', '$mat_num', '$email', '$phone', '$gender', '$pwd');";
  
  if (mysqli_query($conn, $sql)){
    echo "<script>alert('User registered successfully')</script>;";
  }else{
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
  }
  // mysqli_close($conn);
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
              Register Staff
            </header>
            <div class="panel-body">
              <div class="position-center">
                <form role="form" action="" method="POST">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="Fname">First Name</label>
                      <input type="text" class="form-control" id="Fname" name="firstname"
                        placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                      <label for="Lname">Last Name</label>
                      <input type="text" class="form-control" id="Lname" name="lastname" placeholder="Enter Lastname">
                    </div>
                    <div class="form-group">
                      <label for="role">Role</label>
                      <select name="role" id="role">
                        <option value="admin">Admin</option>
                        <option value="student">Student</option>
                        <Option value="staff">Staff</Option>
                      </select>
                      <!-- <input type="text" class="form-control" id="Lname" name="lastname" placeholder="Enter Lastname"> -->
                    </div>
                    <div class="form-group">
                      <div class="radios">
                        <label for="male" class="label_radio">
                          <input type="radio" id="male" name="gender" value="male"> Male
                        </label>
                        <label for="female" class="label_radio">
                          <input type="radio" id="female" name="gender" value="female"> Female
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="uname">Username</label>
                      <input type="text" class="form-control" name="uname" id="uname"
                        placeholder="Staff(Email) and Student(Matric Number)">
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
                  </div>
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