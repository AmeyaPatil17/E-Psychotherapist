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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>EPsychotherapist</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    EPsychotherapist
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.html">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="./table.html">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Reports</p>
                        </a>
                    </li>
                    <li>
                        <a href="./icons.html">
                            <i class="material-icons">bubble_chart</i>
                            <p>Activities</p>
                        </a>
                    </li>
                    <!--<li>
                        <a href="./maps.html">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li> -->
                    <li>
                        <a href="./notifications.html">
                            <i class="material-icons text-gray">chrome_reader_mode</i>
                            <p>Exercises</p>
                        </a>
                    </li>
                     <!--<li class="active-pro">
                        <a href="upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> EPsychotherapist Session </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!--<li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
								<ul class="dropdown-menu">
                                    <li>
                                        <a href="./logout.php">Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                       <!-- <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>-->
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Name</p>
                                    <h3 class="title"><?php echo $first_name.' '.$last_name; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Joining date
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Today's session</p>
                                    <h3 class="title">0
                                        <small>%</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons ">event</i> Date here
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Missed exercises</p>
                                    <h3 class="title">0</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> 
										<a href="#pablo">Complete missed exercises</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Followers</p>
                                    <h3 class="title">+245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                   <!-- <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="green">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Daily Sales</h4>
                                    <p class="category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="orange">
                                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Email Subscriptions</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="red">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Completed Tasks</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Session:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">content_paste</i> Exercise
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <!--<li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">bubble_chart</i> Activity
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>-->
                                               <!-- <li class="">
                                                    <a href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> exercise
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>-->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <!-- <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                       <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                                </label>
                                                            </div>
                                                        </td>-->
														<form name='form1' method='post' action='dashboard.php'>
														<?php

@mysql_connect("localhost" ,"root","");

@mysql_select_db("epsychotherapist");
  
// $querya = mysql_query("SELECT lq FROM `u_profile` WHERE Uid = '$Uid'");
////mysql_query($querya) ;
////$lq = '';
// $rowa = mysql_fetch_array($querya);
// $lq = $rowa['lq'];
////$lq = 10; 
$u1= mysql_query("SELECT * FROM `u_profile2` WHERE Uid = '$Uid'");
$u2 = mysql_fetch_array($u1);
$gender = $u2[7];
$age = $u2[9];
$add = $u2[1];
$city = $u2[2];
$pro = $u2[3];
$country = $u2[4];
$pc = $u2[5];
$occ = $u2[8];
$edu = $u2[10];
$ms = $u2[11];
$gendermale = 'MALE';

$L1= mysql_query("SELECT L FROM `mmpi_result` WHERE Uid = '$Uid'");
$L2 = mysql_fetch_array($L1);
$L = $L2[0];

$F1= mysql_query("SELECT F FROM `mmpi_result` WHERE Uid = '$Uid'");
$F2 = mysql_fetch_array($F1);
$F = $F2[0];

$K1= mysql_query("SELECT K FROM `mmpi_result` WHERE Uid = '$Uid'");
$K2 = mysql_fetch_array($K1);
$K = $K2[0];

$HS1= mysql_query("SELECT HS FROM `mmpi_result` WHERE Uid = '$Uid'");
	$HS2 = mysql_fetch_array($HS1);
	$HS = $HS2[0];

	$D1= mysql_query("SELECT D FROM `mmpi_result` WHERE Uid = '$Uid'");
	$D2 = mysql_fetch_array($D1);
	$D = $D2[0];

	$HY1= mysql_query("SELECT HY FROM `mmpi_result` WHERE Uid = '$Uid'");
	$HY2 = mysql_fetch_array($HY1);
	$HY = $HY2[0];

	$PD1= mysql_query("SELECT PD FROM `mmpi_result` WHERE Uid = '$Uid'");
	$PD2 = mysql_fetch_array($PD1);
	$PD = $PD2[0];

	$MFM1= mysql_query("SELECT MFM FROM `mmpi_result` WHERE Uid = '$Uid'");
	$MFM2 = mysql_fetch_array($MFM1);
	$MFM = $MFM2[0];
	
	$MFF1= mysql_query("SELECT MFF FROM `mmpi_result` WHERE Uid = '$Uid'");
	$MFF2 = mysql_fetch_array($MFF1);
	$MFF = $MFF2[0];

	$PA1= mysql_query("SELECT PA FROM `mmpi_result` WHERE Uid = '$Uid'");
	$PA2 = mysql_fetch_array($PA1);
	$PA = $PA2[0];

	$PT1= mysql_query("SELECT PT FROM `mmpi_result` WHERE Uid = '$Uid'");
	$PT2 = mysql_fetch_array($PT1);
	$PT = $PT2[0];

	$SC1= mysql_query("SELECT SC FROM `mmpi_result` WHERE Uid = '$Uid'");
	$SC2 = mysql_fetch_array($SC1);
	$SC = $SC2[0];

	$MA1= mysql_query("SELECT MA FROM `mmpi_result` WHERE Uid = '$Uid'");
	$MA2 = mysql_fetch_array($MA1);
	$MA = $MA2[0];

	$SI1= mysql_query("SELECT SI FROM `mmpi_result` WHERE Uid = '$Uid'");
	$SI2 = mysql_fetch_array($SI1);
	$SI = $SI2[0];
	
	$des1= mysql_query("SELECT * FROM `mmpi_result` WHERE Uid = '$Uid'");
	$des2 = mysql_fetch_array($des1);
	$desl = $des2[2];
	$desf = $des2[4];
	$desk = $des2[6];
	$deshs = $des2[8];
	$desd = $des2[10];
	$deshy = $des2[12];
	$despd = $des2[14];
	$desmfm = $des2[16];
	$desmff = $des2[18];
	$despa = $des2[20];
	$despt = $des2[22];
	$dessc = $des2[24];
	$desma = $des2[26];
	$dessi = $des2[28];
	if(mysql_num_rows(mysql_query("SHOW TABLES LIKE 'temp_result'"))==0){
$sql2 =	"CREATE TABLE `temp_result` (
  `tscore` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `validsc` int(20) NOT NULL,
  `des` varchar(100) NOT NULL
)";
mysql_query($sql2);


 if ($gender === $gendermale){
$sql3 = "INSERT INTO temp_result (tscore, name,validsc, des) VALUES ('$L', 'L-Scale','1', '$desl'),('$F', 'F-Scale','1', '$desf'),('$K', 'K-Scale', '1', '$desk'),('$HS', 'Hypochondria','0', '$deshs'),('$D', 'Depression', '0', '$desd'),('$HY', 'Hysteria', '0', '$deshy'),('$PD', 'Psychopathic-Deviation', '0', '$despd'),('$MFM', 'Masculinity-Femininity','0', '$desmfm'),('$PA', 'Paranoia','0', '$despa'),('$PT', 'Psychoastenia','0', '$despt'),('$SC', 'Schizophrenia','0', '$dessc'),('$MA', 'Hypomania','0', '$desma'),('$SI', 'Introversion Social','0', '$dessi') ";
mysql_query($sql3);
 }
 else{
$sql3 = "INSERT INTO temp_result (tscore, name,validsc, des) VALUES ('$L', 'L-Scale','1', '$desl'),('$F', 'F-Scale','1', '$desf'),('$K', 'K-Scale','1', '$desk'),('$HS', 'Hypochondria','0', '$deshs'),('$D', 'Depression','0', '$desd'),('$HY', 'Hysteria','0', '$deshy'),('$PD', 'Psychopathic-Deviation','0', '$despd'),('$MFF', 'Masculinity-Femininity','0', '$desmff'),('$PA', 'Paranoia','0', '$despa'),('$PT', 'Psychoastenia','0', '$despt'),('$SC', 'Schizophrenia','0', '$dessc'),('$MA', 'Hypomania','0', '$desma'),('$SI', 'Introversion Social','0', '$dessi') ";
mysql_query($sql3);
 }
	}
if($L>69){
	echo 'You are covering the faults in order to provide a socially adjusted image. This result will not be accepted and you have to give retest due to lack of openness and truth';
	
}else if($F>170){
	echo 'You have answered Randomly in this test. This result will not be accepted and you have to give retest due to Random responses';
	
}else if($K>70){
	echo 'defensiveness to provide personal information and correct the tendency to deny difficulties. This result will not be accepted and you have to give retest due to too much defensive answers';
	
}
else{
	if ($gender === $gendermale){
	$a = max($HS, $D, $HY, $PD, $MFM, $PA, $PT, $SC, $MA, $SI);
	}else{
		$a = max($HS, $D, $HY, $PD, $MFF, $PA, $PT, $SC, $MA, $SI);
	}
	//echo $a;
	$res1 = mysql_query("SELECT name FROM `temp_result` WHERE tscore = '$a' AND validsc = '0'");
	//$res2 = mysql_fetch_array($res1);
	
	while($res2 = mysql_fetch_array($res1)):
	$res = $res2['name'];
	echo "<div class='tab-pane active' id='profile'>
			<table class='table'>
                <tbody>
					<tr><br></tr>
                    <tr><h2>You have symptoms of <b>$res</b> But its better if you consult with a psychiatrist.</h2></tr>
				</tbody>
            </table>
		</div>";
	endwhile;
	
	$rep1 = mysql_query("SELECT def, cause, exe FROM `report` WHERE name = '$res'");
	$rep2 = mysql_fetch_array($rep1);
	$repd = $rep2[0];
	$repc = $rep2[1];
	$repe = $rep2[2];
	
	echo "<div class='tab-pane active' id='profile'>
			<table class='table'>
                <tbody>
					<tr><br></tr>
					<tr><h3>What is $res</h3></tr>
                    <tr>$repd</tr>
					<tr><br></tr>
					<tr><br></tr>
					<tr><h3>What causes $res</h3></tr>
                    <tr>$repc</tr>
					<tr><br></tr>
					<tr><br></tr>
					<tr><h3>How can I help myself?</h3></tr>
                    <tr>$repe</tr>
					<tr><br></tr>
					<tr><br></tr>
					<tr><br></tr>
				</tbody>
            </table>
		</div>";
	
	
	$exe1 = mysql_query("SELECT * FROM `rorschach_result` WHERE Uid= '$Uid'");
	$exe2 = mysql_fetch_array($exe1);
	$card1 = $exe2[1];
	$card2 = $exe2[2];
	$card3 = $exe2[3];
	$card4 = $exe2[4];
	$card5 = $exe2[5];
	$card6 = $exe2[6];
	$card7 = $exe2[7];
	$card8 = $exe2[8];
	$card9 = $exe2[9];
	$card10 = $exe2[10];
	
	mysql_query("DROP TABLE temp_result");
	
	//&nbsp;
	//$res = $res2[0];
	//echo $res;
	// if($a = $HS){
		// echo 'Hypochondria';
	// }else if($a = $D){
		// echo 'Depression';
	// }else if($a = $HY){
		// echo 'Hysteria';
	// }else if($a = $PD){
		// echo 'Psychopathic deviation';
	// }else if($a = $MFM){
		// echo 'Masculinity-Femininity';
	// }else if($a = $PA){
		// echo 'Paranoia';
	// }else if($a = $PT){
		// echo 'Psychasthenia';
	// }else if($a = $SC){
		// echo 'Schizophrenia';
	// }else if($a = $MA){
		// echo 'Hypomania';
	// }else{
		// echo 'Introversion Social';
	// }
	
}


 // while($rows = mysql_fetch_array($query)):
	// $q = $rows['Id'];
	// $qus = $rows['Question'];
	// echo" <p>&nbsp;</p>";
	// echo "<div class='tab-pane active' id='profile'>
			// <table class='table'>
                // <tbody>
                    // <tr>&nbsp;$qus 
						// <td class='td-actions text-right'>
                            
                                // <div class='radio'>
                                    // <label>
                                       // <font color='#777'>True</font> <input type='radio' name = 'answer[$q]' value = '1'>
                                    // </label>
									// <label>
                                       // <font color='#777'>False</font> <input type='radio' name = 'answer[$q]' value = '0'>
                                    // </label>
                                // </div>
                            
							
							
                        // </td>
					// </tr>
				// </tbody>
            // </table>
		// </div>";
	// endwhile;
// ?>
 <?php
// $sql = "UPDATE u_profile SET lq='$q' WHERE Uid = '$Uid'" ;
						// mysql_query($sql);
						// $lq = $q;
						// $_SESSION['lq'] = $lq;
 // echo"
 // <button type='submit' name='next' class='btn btn-primary pull-right'>Continue >> </button>
 
 // ";
/////////test/////////////


//////////test-end///////////////
 
 

 
 ?> </form>
 <div id="printableArea" style="display: none;">
       <div class="col-md-12">
                            <div>
                                <div class="card-header" data-background-color="purple">
                                    <center><h2 class="title">EPsychotherapist Report</h2></center>
                                    <h4><p class="category" > <b>Name:</b> <?php echo $first_name.' '.$last_name?> &nbsp&nbsp&nbsp&nbsp;<b>Gender:</b> <?php echo $gender?>&nbsp&nbsp&nbsp&nbsp <b>Age:</b> <?php echo $age?></p></h4>
									<h4><p class="category"><b>Address:</b> <?php echo $add?> &nbsp&nbsp&nbsp&nbsp <b>City:</b> <?php echo $city?></p></h4>
									<h4><p class="category"><b>Province:</b> <?php echo $pro?>&nbsp&nbsp&nbsp&nbsp <b>Country:</b> <?php echo $country?>&nbsp&nbsp&nbsp&nbsp <b>Postal Code:</b> <?php echo $pc?> </p></h4>
									<h4><p class="category"><b>Occupation:</b> <?php echo $occ?>&nbsp&nbsp&nbsp&nbsp <b>Education:</b> <?php echo $edu?>&nbsp&nbsp&nbsp&nbsp <b>Martial Status:</b> <?php echo $ms?></p></h4>
                                </div>
								<center><h2> MMPI-2 Test Result </h2></center>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th><b>Scale Name</b></th>
                                            <th><b>T-Score</b></th>
                                            <th><b>Description</b></th>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>L-Scale</td>
                                                <td><?php echo $L?></td>
                                                <td><?php echo $desl?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>F-Scale</td>
                                                <td><?php echo $F?></td>
                                                <td><?php echo $desf?></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>K-Scale</td>
                                                <td><?php echo $K?></td>
                                                <td><?php echo $desk?></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Hypochondria</td>
                                                <td><?php echo $HS?></td>
                                                <td><?php echo $deshs?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Depression</td>
                                                <td><?php echo $D?></td>
                                                <td><?php echo $desd?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Hysteria</td>
                                                <td><?php echo $HY?></td>
                                                <td><?php echo $deshy?>r</td>
                                                
                                            </tr>
											<tr>
                                                <td>Psychopathic deviation</td>
                                                <td><?php echo $PD?></td>
                                                <td><?php echo $despd?></td>
                                                
                                            </tr>
											<tr>
                                                <td>Masculinity-Femininity</td>
                                                <td><?php  if ($gender === $gendermale){echo $MFM;}else{echo $MFF;}?></td>
                                                <td><?php if ($gender === $gendermale){echo $desmfm;}else{echo $desmff;}?></td>
                                                
                                            </tr>
											<tr>
                                                <td>Paranoia</td>
                                                <td><?php echo $PA?></td>
                                                <td><?php echo $despa?></td>
                                                
                                            </tr>
											<tr>
                                                <td>Psychoastenia</td>
                                                <td><?php echo $PT?></td>
                                                <td><?php echo $despt?></td>
                                                
                                            </tr>
											<tr>
                                                <td>Schizophrenia</td>
                                                <td><?php echo $SC?></td>
                                                <td><?php echo $dessc?></td>
                                               
                                            </tr>
											<tr>
                                                <td>Hypomania</td>
                                                <td><?php echo $MA?></td>
                                                <td><?php echo $desma?></td>
                                               
                                            </tr>
											<tr>
                                                <td>Introversion Social</td>
                                                <td><?php echo $SI?></td>
                                                <td><?php echo $dessi?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
								
								<center><h2> Rorschach Ink Blots Test Result </h2></center>
								<div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th><b>Card Number</b></th>
                                            
                                            <th><b>User's Response</b></th>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Card Number 1</td>
                                                
                                                <td><?php echo $card1?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Card Number 2</td>
                                                
                                                <td><?php echo $card2?></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Card Number 3</td>
                                               
                                                <td><?php echo $card3?></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Card Number 4</td>
                                                
                                                <td><?php echo $card4?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Card Number 5</td>
                                                
                                                <td><?php echo $card5?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Card Number 6</td>
                                               
                                                <td><?php echo $card6?>r</td>
                                                
                                            </tr>
											<tr>
                                                <td>Card Number 7</td>
                                               
                                                <td><?php echo $card7?></td>
                                                
                                            </tr>
											
											<tr>
                                                <td>Card Number 8</td>
                                               
                                                <td><?php echo $card8?></td>
                                                
                                            </tr>
											<tr>
                                                <td>Card Number 9</td>
                                                
                                                <td><?php echo $card9?></td>
                                                
                                            </tr>
											<tr>
                                                <td>Card Number 10</td>
                                               
                                                <td><?php echo $card10?></td>
                                               
                                            </tr>
											
                                        </tbody>
                                    </table>
                                </div>
								
								
                            </div>
                        </div>
						
						
</div>
<input type="button" class="btn btn-primary pull-right" onclick="window.location.href='dashboard.php'" value="Continue" />
 <input type="button" class="btn btn-primary pull-right" onclick="printDiv('printableArea')" value="print Report" />
 
 
 
						
						
<script type="text/javascript">
function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
 </script>
                                                        <!--<td>Question 1</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
															
															
															<button type='button' rel='tooltip' name = 'answer[$q]' value = 'T' title='True' class='btn btn-primary btn-simple btn-xs'>
                                <i class='material-icons'>check</i>
                            </button>
                            <button type='button' rel='tooltip' name = 'answer[$q]' value = 'F' title='False' class='btn btn-danger btn-simple btn-xs'>
                                <i class='material-icons'>close</i>
                            </button>
															
															
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                       
                                                        <td>Question 2</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      
                                                        <td>Question 3
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                       
                                                        <td>Question 4</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>
                                                       
                                                        <td>Question 5</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>
                                                      
                                                        <td>Question 6</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>
                                                     
                                                        <td>Question 7</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>
                                                       
                                                        <td>Question 8</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                                                      
                                                        <td>Question 9</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                               
                                                        <td>Question 10</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                                                      
                                                        <td>Question 11</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                               
                                                        <td>Question 12</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                                                      
                                                        <td>Question 13</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                               
                                                        <td>Question 14</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                                                      
                                                        <td>Question 15</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                               
                                                        <td>Question 16</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                                                      
                                                        <td>Question 17</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                               
                                                        <td>Question 18</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                                                      
                                                        <td>Question 19</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                               
                                                        <td>Question 20</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
													<tr>                                                      
                                                        <td>Question 21</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="True" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">check</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="False" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr> 
													
                                                </tbody>
                                            </table>
                                        </div>-->
                                      <!--  <div class="tab-pane" id="messages">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>-->
                                        <!--<div class="tab-pane" id="settings">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!-- <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Employees Stats</h4>
                                    <p class="category">New employees on 15th September, 2016</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <!--<ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>-->
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>