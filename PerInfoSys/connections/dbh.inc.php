<?php
$ServerName = "localhost";
$uid = "root";
$pwd = "";
$dbName = "pis";
$site_name = "Personnel Information System";

$conn = mysqli_connect($ServerName, $uid, $pwd, $dbName);

if ($conn){
  echo 'Connection success';
}else{
  echo 'Connection failed';
}