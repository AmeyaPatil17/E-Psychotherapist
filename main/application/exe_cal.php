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
	//$lq = $_SESSION['lq'];
	//echo"$lq";
   // $active = $_SESSION['active'];
}
?>
<?php
@mysql_connect("localhost" ,"root","");

@mysql_select_db("epsychotherapist");
$o1 = '';
$o2 = '';
$o3 = '';
$o4 = '';
$o5 = '';
$o6 = '';
$o7 = '';
$o8 = '';
$o1=isset($_POST['optionsCheckboxes1']) ? $_POST['optionsCheckboxes1'] : null;
$o2=isset($_POST['optionsCheckboxes2']) ? $_POST['optionsCheckboxes2'] : null;
$o3=isset($_POST['optionsCheckboxes3']) ? $_POST['optionsCheckboxes3'] : null;
$o4=isset($_POST['optionsCheckboxes4']) ? $_POST['optionsCheckboxes4'] : null;
$o5=isset($_POST['optionsCheckboxes5']) ? $_POST['optionsCheckboxes5'] : null;
$o6=isset($_POST['optionsCheckboxes6']) ? $_POST['optionsCheckboxes6'] : null;
$o7=isset($_POST['optionsCheckboxes7']) ? $_POST['optionsCheckboxes7'] : null;
$o8=isset($_POST['ownanswer']) ? $_POST['ownanswer'] : null;


// echo $o1;
// echo '<br>';
// echo $o2;
// echo '<br>';
// echo $o3;
// echo '<br>';
// echo $o4;
// echo '<br>';
// echo $o5;
// echo '<br>';
// echo $o6;
// echo '<br>';
 //echo $o8;
if(isset($o1) || isset($o2) || isset($o3) || isset($o4) || isset($o5) || isset($o6) || isset($o7)|| isset($o8)) 
{
	if(mysql_num_rows(mysql_query("select * FROM 'rorschach_result' WHERE Uid= $Uid"))==0){
	$sql7 = "INSERT INTO rorschach_result (Uid) VALUES ('$Uid')";
	mysql_query($sql7);
	}
	
  //echo "proceed";
	$ans = $o1.$o2.$o3.$o4.$o5.$o6.$o7.$o8;
	$querya = mysql_query("SELECT elq FROM `u_profile` WHERE Uid = '$Uid'");
	$rowa = mysql_fetch_array($querya);
	$elq = $rowa['elq'];
	//echo $elq;
	$cexe = $elq + 1;
	//echo $ans;
	$s1='UPDATE rorschach_result SET ';
			   $s2='';
			   $s2.="card".$cexe."= ";
			   $s3="'$ans' WHERE Uid = '$Uid'";
			   $s4=';';
			   $sql=$s1.$s2.$s3.$s4;
			   //echo $sql;
			   mysql_query($sql) ;
	//$sql3 = "INSERT INTO rorschach_result (Uid, card ) VALUES ('$Uid', '$ans')";
	//mysql_query($sql3);
	if ($elq!=10){
  $sql2 = "UPDATE u_profile SET elq='$cexe' WHERE Uid = '$Uid'" ;
						mysql_query($sql2);
						header("location: Report_Building.php");
	}
	
						header("location: test.php");
}
 
 else {
	 
	 header("location: exercise.php");
 }
?>