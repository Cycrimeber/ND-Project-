<?php
  session_start();
  include_once 'connections/dbh.inc.php';

  if(isset($_POST['login'])){
    $username = $_POST['armyNo'];
    $password = $_POST['phone'];
    

    $query = mysqli_query($conn, "select * from personnel_details1 where phone='$password' and army_no='$username';");
    $result_count = mysqli_num_rows($query);

    if($result_count > 0 ){
        $users = mysqli_fetch_array($query);
        $role = $users['role'];
        $name = $users['lastname'];
       
        
        $_SESSION['uid'] = $username;
        $_SESSION['role'] = $role;
        $_SESSION['fname'] = $name;
             
        // header("location: admin_dashboard.php");
        if($role == "admin"){
          header("location: admin_dashboard.php");
        }else{
          header("location:user_profile.php");
        }
        
    }else{
        echo "<script>alert('Incorrect username and password!');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>PIS || Login</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <!-- //Meta tag Keywords -->
  <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <!--/Style-CSS -->
  <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
  <!--//Style-CSS -->
  <link rel="stylesheet" href="css/font-awesome2.min.css" type="text/css" media="all">

</head>

<body>
  <div class="w3l-signinform">
    <!-- container -->
    <div class="wrapper">
      <!-- main content -->
      <div class="w3l-form-info">
        <div class="w3_info">
          <h1>23 Brigade Garrison</h1>

          </h1>
          <p class="sub-para">Personnel Information System</p>
          <h2>Log In</h2>
          <form action="" method="post">
            <div class="input-group">
              <span><i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" placeholder="Army Number" name="armyNo" required="">
            </div>
            <div class="input-group two-groop">
              <span><i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="text" placeholder="Phone" name="phone" required="">
            </div>
            <div class="form-row bottom">
              <div class="form-check">
                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                <label for="remenber"> Remember me?</label>
              </div>
              <!-- <a href="#url" class="forgot">Forgot password?</a> -->
            </div>
            <button class="btn btn-primary btn-block" type="submit" name="login">Log In</button>
          </form>

          <p class="account">Unable to login? Contact 23 Bde Gar CC on 07062335430 </p>
        </div>
      </div>
      <!-- //main content -->
    </div>
    <!-- //container -->
    <!-- footer -->
    <div class="footer">
      <p>&copy; Department of Computer Science - NACEST 2021. All Rights Reserved | Design by <a href="#">D'Eagle</a>
      </p>
    </div>
    <!-- footer -->
  </div>

</body>

</html>