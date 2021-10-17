<?php
	include_once 'include/header.php';
  include_once 'include/aside.php';
  include_once 'connections/dbh.inc.php';
?>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
      <div class="panel panel-default">
        <div class="panel-heading">
          User Profile for <?php echo $_SESSION['uid'] ; ?>
        </div>
        <div>



          <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>

            <tbody>
              <?php
              $username = $_SESSION['uid'];
              $sql = "SELECT * FROM personnel_details1 WHERE army_no = '$username';";
              $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
              $row=mysqli_fetch_array($result);
              $id=$row['army_no'];
            
              ?>

              <tr data-expanded="true">
                <td>Army Number: <?php echo $row['army_no']; ?></td>
                <td>Rank: <?php echo $row['rank']; ?></td>
                <td>Firstname: <?php echo $row['firstname'] ?></td>
                <td>Surname: <?php echo $row['surname']; ?></td>
                <td>Other Names: <?php echo $row['other_names']; ?></td>

                <td>
              </tr>
              <tr data-expanded="true">
                <td>DOLP: <?php echo $row['dolp']; ?></td>
                <td>NOK: <?php echo $row['NOD_details']; ?></td>
                <td>Phone: <?php echo $row['phone']; ?></td>
                <td>Email: <?php echo $row['email']; ?></td>
                <td>Address: <?php echo $row['address'];  ?></td>
                <td>
              </tr>
              <tr data-expanded="true">
                <td>Blood Group: <?php echo $row['Blood_gp']; ?></td>
                <td>Genotype: <?php echo $row['genotype'];; ?></td>
                <td>Marital Status: <?php echo $row['marital_status']; ?></td>
                <td>Trade Class: <?php echo $row['trade_class']; ?></td>
                <td>Civil Qual: <?php echo $row['civil_qual']; ?></td>
                <td>
              </tr>
              <tr data-expanded="true">
                <td>Date of Birth: <?php echo $row['dob']; ?></td>
                <td>Gender: <?php echo $row['sex']; ?></td>
                <td>DOE: <?php echo $row['doe']; ?></td>

                <td>
              </tr>

              <?php
             // }
              ?>

            </tbody>
          </table>
        </div>
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