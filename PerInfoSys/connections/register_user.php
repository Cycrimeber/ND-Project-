<?php
  include_once 'dbh.inc.php';

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