<?php
	include_once 'include/header.php';
  include_once 'include/aside.php';

  include_once 'connections/dbh.inc.php';

  if(isset($_POST['submit'])){
    $update_requested = isset($_POST['make_req'])?$_POST['make_req']:"";
    $army_no = $_SESSION['uid'];
  
    $sql = "INSERT INTO update_requests (army_number, updates) VALUES ('$army_no','$update_requested');";
  
  if (mysqli_query($conn, $sql)){
          echo "<script>alert('Update Request Submitted Successfully'); window.location.href='user_profile.php';</script>";
    
    }else{
      
      echo "<script>alert('Click the submit button to request update');</script>";
      //header('Location:../req_update.php');
    }

  }else{
    echo "Update request not submitted". mysqli_error($conn);
    
  }

  
?>

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
              Welcome <?php echo $_SESSION['uid']; ?>
            </header>
            <div class="panel-body">
              <div class="position-center">
                <form role="form" action="" method="POST">
                  <div class="form-group">
                    <label for="suggest">Enter Requested Updates (Detail - value)</label>
                    <textarea rows="4" cols="50" class="form-control" id="suggest" name="make_req"
                      placeholder="Enter Update Requests" required></textarea>
                  </div>

                  <div class="checkbox">
                    <label>
                      <!-- <input type="checkbox"> Done -->
                    </label>
                  </div>
                  <button type="submit" class="btn btn-info" name="submit">Submit</button>
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