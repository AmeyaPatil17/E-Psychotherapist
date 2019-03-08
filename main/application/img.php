<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  //header("location: ../error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
	$Uid = $_SESSION['Uid'];
   // $active = $_SESSION['active'];
}
?>
<?php

  @mysql_connect("localhost" ,"root","");

@mysql_select_db("epsychotherapist");
$init = 1;
$querya = mysql_query("SELECT elq FROM `u_profile` WHERE Uid = '$Uid'");
$rowa = mysql_fetch_array($querya);
$elq = $rowa['elq'];
$result = mysql_query("SELECT * FROM `Rorschach` WHERE Rid >'$elq' LIMIT 1");
  //$sql = "SELECT * FROM dvd WHERE id=$id";
  //$result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  //mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['Rimage'];
?>