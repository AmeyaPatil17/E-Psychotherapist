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
@mysql_connect("localhost" ,"root","");
				@mysql_select_db("epsychotherapist");
								$queryx = mysql_query("SELECT * FROM u_profile2 WHERE Uid = $Uid");					 
								$tcom2 = mysql_fetch_array($queryx);
								$tcom = $tcom2['test_complete'];
								//echo $tcom;
								if($tcom == 1){
									header("location: result.php"); 									
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
                                                        <i class="material-icons">content_paste</i> Report Building
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
														<form name='form1' method='post' action='mmpi-test.php'>
														<?php

@mysql_connect("localhost" ,"root","");

@mysql_select_db("epsychotherapist");
  
$querya = mysql_query("SELECT lq FROM `u_profile` WHERE Uid = '$Uid'");


if(mysql_num_rows(mysql_query("SHOW TABLES LIKE 'tbl_question_set'"))==1 && mysql_num_rows(mysql_query("SELECT question1 FROM TBL_question_set WHERE userid = '$Uid'"))!=0) {
$querym = mysql_query("SELECT question1 FROM TBL_question_set WHERE userid = '$Uid'");
$rowb = mysql_fetch_array($querym);
$lqt = $rowb['question1'];
	//$lqt = $querym;
	$lq = $lqt-1;
    //echo "$lq Table exists";
	echo "All fields are required.";
}else{ $sql2 =	"CREATE TABLE `TBL_question_set` (
  `userid` int(20) NOT NULL,
  `question1` int(20) NOT NULL,
  `question2` int(20) NOT NULL,
  `question3` int(20) NOT NULL,
  `question4` int(20) NOT NULL,
  `question5` int(20) NOT NULL,
  `createdyet` int(20) NOT NULL
)";
mysql_query($sql2);
$rowa = mysql_fetch_array($querya);
$lq = $rowa['lq'];}
//mysql_query($querya) ;
//$lq = '';

//$lq = 10; 
// $sql2 =	"CREATE TABLE `TBL_question_set` (
  // `userid` int(20) NOT NULL,
  // `question1` varchar(200) NOT NULL,
  // `question2` varchar(200) NOT NULL,
  // `question3` varchar(200) NOT NULL,
  // `question4` varchar(200) NOT NULL,
  // `question5` varchar(200) NOT NULL,
  // `createdyet` int(20) NOT NULL
// )";
//mysql_query($sql2);


$query = mysql_query("SELECT * FROM `mmpi` WHERE Id >'$lq' LIMIT 21");



$a = 1;
 while($rows = mysql_fetch_array($query)):
	$q = $rows['Id'];
	$qus = $rows['Question'];
	echo" <p>&nbsp;</p>";
	echo "<div class='tab-pane active' id='profile'>
			<table class='table'>
                <tbody>
                    <tr>&nbsp;$qus 
					
					
						<td class='td-actions text-right'>
                            
                                <div class='radio'>
                                    <label>
                                       <font color='#777'>True</font> <input type='radio' name = 'answer[$q]' value = '1'>
                                    </label>
									<label>
                                       <font color='#777'>False</font> <input type='radio' name = 'answer[$q]' value = '0'>
                                    </label>
                                </div>
                            
							
							
                        </td>
					</tr>
				</tbody>
            </table>
		</div>";
		$question[$a] = $q;
		$a++;
	endwhile;
	//echo $Uid, $question[1], $question[2], $question[3], $question[4], $question[5];
// $q1 = $question[1];
// $q2 = $question[2];
// $q3 = $question[3];
// $q4 = $question[4];
// $q5 = $question[5];
$queryx = "SELECT * FROM TBL_question_set WHERE userid = '$Uid'";
      $datax = mysql_query($queryx);
      if (mysql_num_rows($datax) == 0) {
$sql3 = "INSERT INTO tbl_question_set (userid, question1, question2, question3, question4, question5, createdyet) VALUES ('$Uid', '$question[1]', '$question[2]', '$question[3]', '$question[4]', '$question[5]', '1')";
mysql_query($sql3);
}
?>
<?php
$sql = "UPDATE u_profile SET lq='$q' WHERE Uid = '$Uid'" ;
						mysql_query($sql);
						$lq = $q;
						$_SESSION['lq'] = $lq;

						// if(!isset($firstname) || trim($firstname) == '')
// {
   // echo "You did not fill out the required fields.";
// }





						
						echo"
<button type='submit' name='next' class='btn btn-primary pull-right'>Continue >> $q $lq</button>
";

?> </form>
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