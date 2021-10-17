<?php
	include_once 'include/header.php';
  include_once 'include/aside.php';
  include_once 'connections/insert_suggestion.php';
?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
      <div class="panel panel-default">
        <div class="panel-heading">
          View Suggestions
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

            <thead>
              <tr>
                <th data-breakpoints="xs">ID</th>
                <th data-breakpoints="xs">Suggestion Date</th>
                <th data-breakpoints="xs">Suggestion</th>
                <th data-breakpoints="xs">Status</th>
                <th data-breakpoints="xs sm md">Date Treated</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM all_suggestions;";
              $result = mysqli_query($conn, $sql);
              if(isset($_POST['submit'])){
                  while ($row = mysqli_fetch_array($result)){
                    $id = $row['ID'];
                    $sug_date = $row['sug_date'];
                    $suggestion = $row['suggestion'];
                    $treat_date = $row['date_treated'];

                   
                    
              ?>

              <tr data-expanded="true">
                <td><?php echo $id; ?></td>
                <td><?php echo $sug_date; ?></td>
                <td><?php echo $suggestion; ?></td>
                <td>
                  <form>
                    <input type="checkbox" name="status" id="status_check">
                    <div id="status">Treated</div>
                  </form>
                </td>
                <td>
                  <?php echo $treat_date; ?>
                </td>
              </tr>
              <?php
              }
            } else
            {
              echo 'Unable to update suggestion';
            }
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